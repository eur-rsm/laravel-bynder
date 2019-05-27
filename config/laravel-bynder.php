<?php
/**
 * Laravel Bynder Configuration
 */
return [
    'oauth' => [
        'consumerKey' => env('BYNDER_CONSUMER_KEY', null),
        'consumerSecret' => env('BYNDER_CONSUMER_SECRET', null),
        'token' => env('BYNDER_CLIENT_KEY', null),
        'tokenSecret' => env('BYNDER_CLIENT_SECRET', null),
        'baseUrl' => env('BYNDER_URL', null),
    ],
];