<?php

namespace EUR\RSM\LaravelBynder\Services;

use EUR\RSM\LaravelBynder\Connectors\BynderConnector;
use EUR\RSM\LaravelBynder\Contracts\BynderServiceContract;

/**
 * Class BynderService
 * @package EUR\RSM\LaravelBynder\Services
 */
final class BynderService implements BynderServiceContract
{
    /**
     * @var BynderConnector
     */
    protected $bynderApi;

    /**
     * BynderService constructor.
     */
    public function __construct()
    {
        $this->bynderApi = BynderConnector::getInstance()->getConnection();
    }

    /**
     * @return \Bynder\Api\Impl\BynderApi|BynderConnector
     */
    public function getApi()
    {
        return $this->bynderApi;
    }
}
