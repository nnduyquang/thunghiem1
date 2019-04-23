<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Backend\Components\ComponentsRepositoryInterface::class,
            \App\Repositories\Backend\Components\ComponentsRepository::class
        );
    }
}
