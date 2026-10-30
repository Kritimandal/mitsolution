<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('admin:create {email} {--name=Admin}', function (string $email) {
    if (User::where('email', $email)->exists()) {
        $this->error("A user with email {$email} already exists.");

        return 1;
    }

    $password = $this->secret('Password (at least 8 characters)');
    if (strlen((string) $password) < 8) {
        $this->error('Password must be at least 8 characters.');

        return 1;
    }

    User::create([
        'name' => $this->option('name'),
        'email' => $email,
        'password' => Hash::make($password),
    ]);
    $this->info("Admin {$email} created.");

    return 0;
})->purpose('Create an admin user');
