<?php

namespace EUR\RSM\LaravelBynder\Connectors;

use Bynder\Api\BynderApiFactory;
use EUR\RSM\LaravelBynder\Exceptions\BynderConfigurationException;

/**
 * Class BynderConnector
 * @package EUR\RSM\LaravelBynder\Connectors
 */
final class BynderConnector
{
    /**
     * @var
     */
    private static $instance;

    /**
     * @var
     */
    private $connection;

    /**
     * BynderConnector constructor.
     */
    private function __construct()
    {
        $config = config('laravel-bynder.oauth');

        if (empty($config['consumerKey']) ||
            empty($config['consumerSecret']) ||
            empty($config['token']) ||
            empty($config['tokenSecret']) ||
            empty($config['baseUrl'])) {
            throw new BynderConfigurationException('Not all configurable options have been set.');
        }

        $bynderFactory = BynderApiFactory::create($config);

        $this->connection = $bynderFactory;
    }

    /**
     * @return BynderConnector
     * @throws BynderConfigurationException
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new BynderConnector();
        }

        return self::$instance;
    }

    /**
     * @return \Bynder\Api\Impl\BynderApi
     */
    public function getConnection()
    {
        return $this->connection;
    }
}