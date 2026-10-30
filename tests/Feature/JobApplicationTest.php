<?php

namespace Tests\Feature;

use App\Models\Application;
use App\Models\User;
use App\Services\FileUploader;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class JobApplicationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('local');
    }

    private function applicationData(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Sita Sharma',
            'email' => 'sita@example.com',
            'phone_no' => '9800000000',
            'message' => 'I would like to apply.',
            'position' => 'Laravel Developer',
            'resume' => UploadedFile::fake()->create('cv.pdf', 200, 'application/pdf'),
        ], $overrides);
    }

    public function test_resume_is_stored_privately(): void
    {
        $this->post(route('application-store'), $this->applicationData())
            ->assertRedirect('/application-create')
            ->assertSessionHas('status');

        $application = Application::sole();
        Storage::disk('local')->assertExists(FileUploader::RESUME_DIR . '/' . $application->resume);
        $this->assertFileDoesNotExist(public_path('resume/' . $application->resume));
        $this->assertStringNotContainsString('cv', $application->resume);
    }

    public function test_non_document_resume_is_rejected(): void
    {
        $this->post(route('application-store'), $this->applicationData([
            'resume' => UploadedFile::fake()->createWithContent('cv.php', '<?php system($_GET["c"]); ?>'),
        ]))->assertSessionHasErrors('resume');

        $this->assertDatabaseCount('applications', 0);
    }

    public function test_invalid_email_is_rejected(): void
    {
        $this->post(route('application-store'), $this->applicationData(['email' => 'not-an-email']))
            ->assertSessionHasErrors('email');
    }

    public function test_guest_cannot_download_resumes(): void
    {
        $this->post(route('application-store'), $this->applicationData());

        $this->get(route('application-download', Application::sole()->resume))
            ->assertRedirect(route('login'));
    }

    public function test_admin_can_download_resume(): void
    {
        $this->post(route('application-store'), $this->applicationData());

        $this->actingAs(User::factory()->create())
            ->get(route('application-download', Application::sole()->resume))
            ->assertOk()
            ->assertDownload();
    }

    public function test_unknown_resume_returns_404(): void
    {
        $this->actingAs(User::factory()->create())
            ->get(route('application-download', 'missing.pdf'))
            ->assertNotFound();
    }

    public function test_download_cannot_leave_the_resume_folder(): void
    {
        Storage::disk('local')->put('secret.txt', 'secret');

        $this->actingAs(User::factory()->create())
            ->get('/application-download/..%2Fsecret.txt')
            ->assertNotFound();
    }

    public function test_admin_can_delete_application_and_resume(): void
    {
        $this->post(route('application-store'), $this->applicationData());
        $application = Application::sole();

        $this->actingAs(User::factory()->create())
            ->get(route('application-delete', $application))
            ->assertRedirect(route('application-index'));

        $this->assertModelMissing($application);
        Storage::disk('local')->assertMissing(FileUploader::RESUME_DIR . '/' . $application->resume);
    }
}
