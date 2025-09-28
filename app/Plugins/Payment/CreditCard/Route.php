<?php
/**
 * Route front
 */
if(sc_config_exist('CreditCard')) {
Route::group(
    [
        'prefix'    => 'plugin/creditcard',
        'namespace' => 'App\Plugins\Payment\CreditCard\Controllers',
    ],
    function () {
        Route::get('index', 'FrontController@index')
        ->name('creditcard.index');
    }
);
}
/**
 * Route admin
 */
if(sc_config_exist('CreditCard', SC_ID_ROOT)) {
Route::group(
    [
        'prefix' => SC_ADMIN_PREFIX.'/creditcard',
        'middleware' => SC_ADMIN_MIDDLEWARE,
        'namespace' => 'App\Plugins\Payment\CreditCard\Admin',
    ], 
    function () {
        Route::get('/', 'AdminController@index')
        ->name('admin_creditcard.index');
    }
);
}