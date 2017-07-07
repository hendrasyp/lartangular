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

Auth::routes();

Route::group(['middleware' => ['web']], function () {
    Route::resource('items', 'ItemController');
});

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('pengguna', 'PenggunaController');

Route::get('/pengguna','PenggunaController@getIndex');
Route::get('/pengguna/anyData','PenggunaController@anyData')->name('pengguna.data');