<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //  schema:defaultStringLength(191);
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
