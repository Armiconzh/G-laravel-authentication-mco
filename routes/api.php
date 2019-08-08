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

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){

    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->GET('me','App\Http\Controllers\AuthController@show');
        $api->DELETE('logout' ,'App\Http\Controllers\AuthController@logout');
    });
        $api->POST('register' , 'App\Http\Controllers\AuthController@register');
        $api->POST('login' , 'App\Http\Controllers\AuthController@login');

    
});
