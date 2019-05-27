<?php

namespace EUR\RSM\LaravelBynder\Facades;

use EUR\RSM\LaravelBynder\Services\BynderService;
use Illuminate\Support\Facades\Facade;

/**
 * Class BynderServiceFacade
 *
 * @package EUR\RSM\LaravelBynder\Facades
 */
class BynderServiceFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BynderService::class;
    }
}
