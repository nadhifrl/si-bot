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
    // Route::get('/verifikasi', 'HomeController@verifikasi');
    // Route::get('/sarana', 'SaranaController@index');
    Route::resource('sarana', 'SaranaController');
    Route::resource('jadwal', 'JadwalController');
    Route::resource('harga', 'HargaController');
    Route::resource('verifikasi', 'VerifikasiController');
    Route::resource('laporanpemesanan', 'LaporanPemesananController');
    Route::resource('laporanpembayaran', 'LaporanPembayaranController');
    Route::get('/prediksipembeliantiket', 'PrediksiPembelianTiketController@prediksipembeliantiket');
});

Route::group(['middleware' => ['auth', 'cekrole:pengunjung']], function () {
    Route::get('/pengunjung', 'HomeController@pengunjung');
    Route::resource('profil', 'ProfilPengunjungController');
    Route::get('/informasi', 'InformasiController@index');
    // Route::get('/pemesanantiket', 'PemesananTiketController@index');
    // Route::get('/pemesanantiket/create', 'PemesananTiketController@create');
    // Route::post('/pemesanantiket-store', 'PemesananTiketController@store');
    Route::resource('pemesanantiket', 'PemesananTiketController');
    // Route::get('/pembayarantiket', 'PembayaranTiketController@index');
    Route::resource('pembayarantiket', 'PembayaranTiketController');
    Route::resource('detailtiket', 'DetailTiketController');
    Route::resource('detailpemesanantiket', 'DetailPemesananTiketController');
    Route::resource('detailpembayarantiket', 'DetailPembayaranTiketController');
    Route::resource('lihatdatapemesanantiket', 'LihatDataPemesananTiketController');
    Route::resource('lihatdatapembayarantiket', 'LihatDataPembayaranTiketController');
    Route::resource('cetaktiket', 'CetakTiketController');
    Route::resource('lihatdatatiket', 'LihatDataTiketController');
});
