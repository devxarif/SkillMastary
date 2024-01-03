<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Currency;
use App\Models\Language;
use Illuminate\Support\ServiceProvider;

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
        if (! app()->runningInConsole()) {
            view()->share('all_language', Language::active()->get());
            view()->share('all_currency', Currency::active()->get());
            view()->share('all_category', Category::all());


        //     if (authCheck()) {
        //         view()->share('authUser', authUser());
        //     }

        //     view()->share('authAdmin', authUser('admin'));
        //     if (authCheck('admin')) {
        //     }
        }
    }
}
