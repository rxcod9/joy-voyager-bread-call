<?php

return [

    /*
     * If enabled for voyager-bread-call package.
     */
    'enabled' => env('VOYAGER_BREAD_CALL_ENABLED', true),

    /*
     * The config_key for voyager-bread-call package.
     */
    'config_key' => env('VOYAGER_BREAD_CALL_CONFIG_KEY', 'joy-voyager-bread-call'),

    /*
     * The route_prefix for voyager-bread-call package.
     */
    'route_prefix' => env('VOYAGER_BREAD_CALL_ROUTE_PREFIX', 'joy-voyager-bread-call'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadCall\\Http\\Controllers',
    ],
];
