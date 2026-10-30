<?php

namespace Tests\Feature;

use App\Models\Client;
use App\Models\User;
use App\Services\FileUploader;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ImageUploadTest extends TestCase
{
    use RefreshDatabase;

    protected function tearDown(): void
    {
        foreach (Client::pluck('image') as $name) {
            @unlink(public_path(FileUploader::PUBLIC_IMAGE_DIR . '/' . $name));
        }
        parent::tearDown();
    }

    private function admin(): User
    {
        return User::factory()->create();
    }

    public function test_guest_cannot_upload(): void
    {
        $this->post(route('client-store'), [
            'name' => 'Acme',
            'image' => UploadedFile::fake()->image('logo.png'),
        ])->assertRedirect(route('login'));

        $this->assertDatabaseCount('clients', 0);
    }

    public function test_valid_image_is_saved_with_a_random_name(): void
    {
        $this->actingAs($this->admin())->post(route('client-store'), [
            'name' => 'Acme',
            'image' => UploadedFile::fake()->image('my logo.png', 200, 200),
        ])->assertRedirect('/client-index');

        $client = Client::sole();
        $this->assertMatchesRegularExpression('/^[A-Za-z0-9]{40}\.png$/', $client->image);
        $this->assertStringNotContainsString('logo', $client->image);
        $this->assertFileExists(public_path(FileUploader::PUBLIC_IMAGE_DIR . '/' . $client->image));
    }

    public function test_php_file_is_rejected(): void
    {
        $file = UploadedFile::fake()->createWithContent('shell.php', '<?php echo "hacked"; ?>');

        $this->actingAs($this->admin())->post(route('client-store'), [
            'name' => 'Acme',
            'image' => $file,
        ])->assertSessionHasErrors('image');

        $this->assertDatabaseCount('clients', 0);
    }

    public function test_php_file_renamed_to_png_is_rejected(): void
    {
        $path = tempnam(sys_get_temp_dir(), 'upload');
        file_put_contents($path, '<?php echo "hacked"; ?>');
        $file = new UploadedFile($path, 'logo.png', null, null, true);

        $this->actingAs($this->admin())->post(route('client-store'), [
            'name' => 'Acme',
            'image' => $file,
        ])->assertSessionHasErrors('image');

        $this->assertDatabaseCount('clients', 0);
    }

    public function test_svg_is_rejected(): void
    {
        $svg = UploadedFile::fake()->createWithContent('logo.svg', '<svg xmlns="http://www.w3.org/2000/svg"><script>alert(1)</script></svg>');

        $this->actingAs($this->admin())->post(route('client-store'), [
            'name' => 'Acme',
            'image' => $svg,
        ])->assertSessionHasErrors('image');
    }

    public function test_image_larger_than_2mb_is_rejected(): void
    {
        $this->actingAs($this->admin())->post(route('client-store'), [
            'name' => 'Acme',
            'image' => UploadedFile::fake()->image('big.jpg')->size(3000),
        ])->assertSessionHasErrors('image');
    }
}
