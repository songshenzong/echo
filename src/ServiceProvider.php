<?php

namespace Songshenzong\BashEcho;

/**
 * Class ServiceProvider
 *
 * @package Songshenzong\BashEcho
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('BashEcho', function ($app) {
            return new BashEcho($app);
        });

        $this->app->alias('BashEcho', Facade::class);
    }
}
