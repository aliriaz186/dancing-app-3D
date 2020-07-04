<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about_us');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/guide', function () {
    return view('guide_tour');
});
Route::get('/lessons', function () {
    return view('lessons');
});
Route::get('/chart', function () {
    return view('dance_chart');
});
Route::get('/select', function () {
    return view('select_lesson');
});
