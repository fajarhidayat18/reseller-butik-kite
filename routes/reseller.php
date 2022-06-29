<?php

Route::group(['namespace' => 'Reseller', 'prefix' => 'reseller'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/stok', 'StokResellerController@index')->name('stokreseller');
    Route::post('/stok/foto', 'StokResellerController@simpan_foto_barang_reseller')->name('simpn_foto');
    Route::post('/stok/hrg_jual', 'StokResellerController@simpan_harga_barang_reseller')->name('simpn_harga');
    Route::post('/stok/brg_terjual', 'StokResellerController@terjual_barang_reseller')->name('barang_terjual');

    Route::get('/setprofile', 'ProfileResellerController@index')->name('setprofile');
    Route::get('/etalase', 'EtalaseController@index')->name('etalase');
});

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/register/reseller', 'RegisterController@showregisreseller')->name('register');
    Route::post('/register/create', 'RegisterController@createreseller')->name('buatakun');
});
