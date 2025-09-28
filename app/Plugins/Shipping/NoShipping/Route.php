<?php
/**
 * Route front
 */
if(sc_config_exist('NoShipping')) {
Route::group(
    [
        'prefix'    => 'plugin/no_shipping',
        'namespace' => 'App\Plugins\Shipping\NoShipping\Controllers',
    ],
    function () {
        Route::get('index', 'FrontController@index')
        ->name('no_shipping.index');
    }
);
}
/**
 * Route admin
 */
if(sc_config_exist('NoShipping', SC_ID_ROOT)) {
Route::group(
    [
        'prefix' => SC_ADMIN_PREFIX.'/no_shipping',
        'middleware' => SC_ADMIN_MIDDLEWARE,
        'namespace' => 'App\Plugins\Shipping\NoShipping\Admin',
    ], 
    function () {
        Route::get('/', 'AdminController@index')
        ->name('admin_no_shipping.index');
    }
);
}