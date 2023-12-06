<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\SubCategory;
use App\Models\Category;

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
                'subcategory1' => SubCategory::where('category_id', '3')->take(5)->get(),
                'subcategory2' => SubCategory::where('category_id', '8')->take(5)->get(),

            ]);
        });
    }
}
