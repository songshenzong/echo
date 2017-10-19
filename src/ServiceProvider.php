<?php

namespace Songshenzong\Echox;

/**
 * Class ServiceProvider
 *
 * @package Songshenzong\Echox
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
        $this->app->singleton('Echox', function ($app) {
            return new Echox($app);
        });

        $this->app->alias('Echox', Facade::class);
    }
}
