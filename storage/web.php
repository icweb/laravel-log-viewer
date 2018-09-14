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

Route::get('/login', [
    'uses'  => 'LoginController@index',
    'as'    => 'login'
]);

Route::get('/', [
    'uses'  => 'HomeController@index',
    'as'    => 'index'
]);

Route::get('/logs', [
    'uses'  => 'HomeController@logs',
    'as'    => 'logs'
]);

Route::get('/frame', [
    'uses'  => 'HomeController@frame',
    'as'    => 'frame'
]);

//Route::group(['middleware' => 'auth'], function() {
//
//    Route::get('/', [
//        'uses'  => 'HomeController@index',
//        'as'    => 'index'
//    ]);
//
//});
