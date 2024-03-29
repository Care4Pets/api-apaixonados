<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v1')->group(function () {
    Route::post('login', 'API\AuthController@login');
    Route::post('register', 'API\AuthController@register');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('/pet/mypets', 'API\PetController@getPetByUser');
        Route::prefix('pet')->group(function () {
            Route::post('create', 'API\PetController@create');
        });
        Route::post('getUser', 'Api\AuthController@getUser');

    });

});

