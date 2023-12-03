<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        view()->composer(['layouts.frontend-layout.nav'], function ($view) {
            $view->with([
                'setting' => Setting::first(),

            ]);
        });

        view()->composer('layouts.frontend-layout.footer', function ($view) {
            $view->with([
                'setting' => Setting::first(),

            ]);
        });
    }
}
