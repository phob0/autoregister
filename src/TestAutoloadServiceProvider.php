<?php

namespace Phobo\TestAutoload;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Route;

class TestAutoloadServiceProvider extends ServiceProvider
{
    const VERSION = '1.0';

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // register the current package
        $this->app->bind('base', function ($app) {
            return new Base($app);
        });
    }
}
