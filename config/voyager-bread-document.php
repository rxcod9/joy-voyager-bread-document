<?php

return [

    /*
     * If enabled for voyager-bread-document package.
     */
    'enabled' => env('VOYAGER_BREAD_DOCUMENT_ENABLED', true),

    /*
     * The config_key for voyager-bread-document package.
     */
    'config_key' => env('VOYAGER_BREAD_DOCUMENT_CONFIG_KEY', 'joy-voyager-bread-document'),

    /*
     * The route_prefix for voyager-bread-document package.
     */
    'route_prefix' => env('VOYAGER_BREAD_DOCUMENT_ROUTE_PREFIX', 'joy-voyager-bread-document'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadDocument\\Http\\Controllers',
    ],
];
