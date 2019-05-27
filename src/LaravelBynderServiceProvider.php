<?php

namespace EUR\RSM\LaravelBynder;

use EUR\RSM\LaravelBynder\Contracts\BynderServiceContract;
use EUR\RSM\LaravelBynder\Services\BynderService;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelBynderServiceProvider
 *
 * @package EUR\RSM\LaravelBynder
 */
class LaravelBynderServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $packageRootDir = __DIR__ . '/..';

    /**
     *
     */
    public function boot()
    {
        $this->getConfiguration();
    }

    /**
     * Configuration
     */
    public function getConfiguration()
    {
        $this->publishes([
            $this->packageRootDir . '/config/laravel-bynder.php' => config_path('laravel-bynder.php'),
        ]);
    }

    /**
     * Class bindings for facades services.
     */
    public function getClassBindings()
    {
        $this->app->singleton(BynderServiceContract::class, function () {
            return new BynderService();
        });
    }

}
