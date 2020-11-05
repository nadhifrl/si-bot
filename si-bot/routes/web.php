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
    return view('index');
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth', 'cekrole:admin']], function () {
    Route::get('/admin', 'HomeController@admin');
});

Route::group(['middleware' => ['auth', 'cekrole:pengunjung']], function () {
    Route::get('/pengunjung', 'HomeController@pengunjung');
    Route::get('/tiket', 'HomeController@tiket');
    Route::get('/profil', 'profilPengunjungController@profil');
    
});
