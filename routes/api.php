<?php

use Illuminate\Http\Request;

Route::post('operation', 'OperationController@index');

if (env("APP_DEBUG")) {
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'UserController@index');
        Route::post('/', 'UserController@store');
        Route::put('/{id}', 'UserController@update');
    });


    Route::group(['prefix' => 'privatekey'], function() {
        Route::get('/', 'PrivateKeyController@index');
        Route::post('/', 'PrivateKeyController@store');
    });


    Route::group(['prefix' => 'coin'], function() {
        Route::get('/', 'CoinController@index');
        Route::post('/', 'CoinController@store');
        Route::put('/{id}', 'CoinController@update');
    });
}