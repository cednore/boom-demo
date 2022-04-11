<?php

/*
|--------------------------------------------------------------------------
| Boom routes
|--------------------------------------------------------------------------
|
| You can define routes here to be reported socket events from boom-server.
| All event names will be converted by `ioevn` helper, all namespace names
| will be converted by `ionsp` helper to be used in URL.
|
| You can use `boom:make:nsp` artisan command to easily add routes and
| controller for new namespace.
|
| Note that 4 routes; `connect`, `disconnecting`, `disconnect`, `error`
| are pre-defined and should be present for all socket.io namespaces. And be
| especially aware of these events in root namespace.
|
*/

// Namespace '/'
Route::group(['prefix' => ionsp('/')], function() {
    Route::post(ioevn('connect'), 'RootController@connect');
    Route::post(ioevn('disconnecting'), 'RootController@disconnecting');
    Route::post(ioevn('disconnect'), 'RootController@disconnect');
    Route::post(ioevn('error'), 'RootController@error');
});

// Namespace '/demo'
Route::group(['prefix' => ionsp('/demo')], function() {
    Route::post(ioevn('connect'), 'DemoController@connect');
    Route::post(ioevn('disconnecting'), 'DemoController@disconnecting');
    Route::post(ioevn('disconnect'), 'DemoController@disconnect');
    Route::post(ioevn('error'), 'DemoController@error');
    Route::post(ioevn('chat'), 'DemoController@chat');
});
