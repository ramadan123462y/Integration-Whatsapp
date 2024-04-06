<?php

namespace App\Providers;

use App\Http\Services\Watsapp;
use Illuminate\Support\ServiceProvider;

class WatsappServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('WatsappService','App\Http\Services\Watsapp');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
