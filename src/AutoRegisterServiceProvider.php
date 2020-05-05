<?php

namespace Phobo\AutoRegister;

use Illuminate\Support\ServiceProvider;

class AutoRegisterServiceProvider extends ServiceProvider
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
