<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Database settings
    |--------------------------------------------------------------------------
    |
    | Here are database settings to access shared resources from boom-server
    | on database.
    |
    */

    'db' => [
        // Connection name to access db
        'connection' => '',

        // Table names
        'tables' => [
            'sockets' => 'sockets',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | API settings
    |--------------------------------------------------------------------------
    |
    | Here you can change configurations to interact with your boom-server by
    | accessing exposed http api.
    |
    */

    'api' => [
        // Base URL to access API endpoints of boom-server
        'base_url' => 'http://localhost:9001',

        // Authentication configurations
        'auth' => [
            // Auth token to be added on request header
            'token' => env('BOOM_API_AUTH_TOKEN', ''),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | App settings
    |--------------------------------------------------------------------------
    |
    | Here you can change configurations for the boom-server to report events
    | on this laravel app.
    | Note that empty app auth token means no authorization over requests from
    | boom-server.
    |
    */

    'app' => [
        // Authentication configurations
        'auth' => [
            // Auth token must be included on request header
            'token' => env('BOOM_APP_AUTH_TOKEN', ''),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Route settings
    |--------------------------------------------------------------------------
    |
    | The routing configuration of the boom controller, including the path prefix,
    | the controller namespace, and the default middleware. If you want to
    | access through the root path, just set the prefix to empty string.
    |
    */

    'route' => [
        // Route prefix
        'prefix' => env('BOOM_ROUTE_PREFIX', 'boom'),

        // Namespace holding namespace controllers
        'namespace' => 'App\\Http\\Controllers\\Boom',

        // Middlewares to be applied onto all of boom routes
        'middleware' => ['boom'],
    ],

];
