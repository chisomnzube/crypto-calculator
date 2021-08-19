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

Route::get('/', 'LandingpageController@index')->name('landingpage');
Route::get('/supported-currencies', 'LandingpageController@create')->name('supported.coins');
Route::get('/crypto-exchange', 'LandingpageController@exchange')->name('crypto.exchange');
