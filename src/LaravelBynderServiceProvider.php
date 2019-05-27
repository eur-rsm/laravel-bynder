<?php

namespace EUR\RSM\LaravelBynder;

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
    protected $packageRootDir = __DIR__ . '/../..';

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
}
