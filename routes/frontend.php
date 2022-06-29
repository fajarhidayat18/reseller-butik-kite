<?php

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutus', 'LibController@show');
Route::get('/faq', 'LibController@index');
Route::get('/pekerjaankami', 'LibController@job');
Route::get('/copyright', 'LibController@hakcipta');
Route::get('/licensi', 'LibController@licensi');
Route::get('/privasi', 'LibController@privasi');
Route::get('/contact', 'LibController@kontak');
Route::get('/support', 'LibController@dukung');

Route::group(['namespace' => 'Frontend'], function () {
    
    //Halaman Depan
    Route::get('/', 'HomepageController@index');
    Route::get('/product', 'HomepageController@product');
    Route::get('/search', 'HomepageController@cari')->name('search');

    //Profil Reseller
    Route::get('/toko/{id}', 'BrandpageController@index')->name('myStore');

    //Detail Barang
    Route::get('/detail/product/{id}', 'ProductController@index')->name('dProduct');
    Route::get('/detail', 'ProductController@detail');
    
});