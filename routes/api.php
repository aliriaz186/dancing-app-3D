<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');


Route::get('lesson', 'API\UserController@lesson');
Route::get('section/{id}', 'API\UserController@section');
Route::get('video/{id}', 'API\UserController@video');


Route::group(['middleware' => 'auth:api'], function(){

    Route::post('details', 'API\UserController@details');

    Route::post('change_password', 'API\UserController@changePassword');
    Route::post('edit_profile', 'API\UserController@editProfile');

    Route::post('create', 'API\PasswordResetController@create');
    Route::get('find/{token}', 'API\PasswordResetController@find');
    Route::post('reset', 'API\PasswordResetController@reset');



});