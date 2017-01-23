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

Route::get('/herbs', function () {
    return view('herb-competition', [
        'now' => '25/01/2017 12:00 CET',
        'until' => '29/01/2017 12:00 CET',
        'winner' => '30/01/2017',
    ]);
});

Route::get('login', 'Auth\AuthController@redirectToProvider');
Route::get('login/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('discord', 'HomeController@discord');
