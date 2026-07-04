<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Avoid MySQL/MariaDB key length errors when using utf8mb4 on older versions.
        Schema::defaultStringLength(191);

        Paginator::useBootstrap();

        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
