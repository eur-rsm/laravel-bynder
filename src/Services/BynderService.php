<?php

namespace EUR\RSM\LaravelBynder\Services;

use EUR\RSM\LaravelBynder\Connectors\BynderConnector;

/**
 * Class BynderService
 * @package EUR\RSM\LaravelBynder\Services
 */
final class BynderService
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
     * @param array|null $query
     * @return \GuzzleHttp\Promise\Promise
     * @throws \Exception
     */
    public function getMediaList(array $query = null)
    {
        if ($query === null) {
            $query = [
                'count' => true,
                'limit' => 2,
                'type' => 'image',
                'versions' => 1,
            ];
        }

        return $this->bynderApi->getAssetBankManager()->getMediaList($query)->wait();
    }
}