<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_registration_is_disabled(): void
    {
        $this->get('/register')->assertNotFound();

        $this->post('/register', [
            'name' => 'Attacker',
            'email' => 'attacker@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ])->assertNotFound();

        $this->assertDatabaseCount('users', 0);
    }

    public function test_admin_can_be_created_from_the_command_line(): void
    {
        $this->artisan('admin:create', ['email' => 'admin@example.com', '--name' => 'Site Admin'])
            ->expectsQuestion('Password (at least 8 characters)', 'secret-pass-123')
            ->expectsOutput('Admin admin@example.com created.')
            ->assertExitCode(0);

        $user = User::sole();
        $this->assertSame('Site Admin', $user->name);
        $this->assertTrue(Hash::check('secret-pass-123', $user->password));
    }

    public function test_short_password_is_rejected(): void
    {
        $this->artisan('admin:create', ['email' => 'admin@example.com'])
            ->expectsQuestion('Password (at least 8 characters)', 'short')
            ->assertExitCode(1);

        $this->assertDatabaseCount('users', 0);
    }

    public function test_duplicate_email_is_rejected(): void
    {
        User::factory()->create(['email' => 'admin@example.com']);

        $this->artisan('admin:create', ['email' => 'admin@example.com'])
            ->assertExitCode(1);
    }

    public function test_admin_pages_require_login(): void
    {
        $this->get('/post-index')->assertRedirect(route('login'));
        $this->get('/application-index')->assertRedirect(route('login'));
    }
}
