<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BezhanSalleh\LanguageSwitch\LanguageSwitch;

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

         LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(explode(",",env('APP_LANG',"pl,en,de"))); // also accepts a closure
        });
    }
}
