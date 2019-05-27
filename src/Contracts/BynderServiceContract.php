<?php

namespace EUR\RSM\LaravelBynder\Contracts;

use EUR\RSM\LaravelBynder\Connectors\BynderConnector;

/**
 * Interface BynderServiceContract
 *
 * @package EUR\RSM\LaravelBynder\Contracts
 */
interface BynderServiceContract
{
    /**
     * @return \Bynder\Api\Impl\BynderApi|BynderConnector
     */
    public function getApi();
}