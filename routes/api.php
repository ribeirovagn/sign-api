<?php

use Illuminate\Http\Request;

Route::post('operation', 'OperationController@index');
Route::resource('user', 'UserController');
Route::resource('privatekey', 'PrivateKeyController');
Route::resource('coin', 'CoinController');