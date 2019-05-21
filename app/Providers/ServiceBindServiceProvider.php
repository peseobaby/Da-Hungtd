<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Image\ImageService;
use App\Services\Image\ImageServiceInterface;

class ServiceBindServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            ImageServiceInterface::class,
            ImageService::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
