<?php

//Backend
Route::group(['namespace' => 'Backend' , 'prefix' => 'admin'], function(){
    Route::get('/barang','BarangController@index')->name('barang');
    Route::get('/barang/create','BarangController@create')->name('createbarang');
    Route::post('/barang/create', 'BarangController@tambah_brg')->name('tambah_brg');
    Route::get('/barang/edit/{id}', 'BarangController@edit');
    Route::post('/barang/edit/{id}/update', 'BarangController@update')->name('updatebarang');
    Route::get('/barang/hapus/{id}', 'BarangController@hapus')->name('hapus');
    Route::post('/barang/update', 'BarangController@update')->name('updatebarang');
    Route::post('/barang/sent_reseller', 'BarangController@sent_res');
    Route::get('/barang/detail_stok/{id}', 'BarangController@detail_stok');


    //stok
    Route::get('/stok', 'StokController@index')->name('stok');
    Route::post('/stok/save', 'StokController@save');
    Route::post('/stok/update', 'StokController@update')->name('updatestok');
    Route::get('/stok/delete/{id}', 'StokController@delete')->name('deletestok');

    Route::get('/stok/datatable', 'StokController@datatable');
    // stok multi
    Route::get('/stok/generate', 'StokController@generate')->name('generate');
    Route::post('/stok/createstok_m', 'StokController@createstok_m')->name('createstok');
    Route::post('/stok/save_createstok_m', 'StokController@save_createstok_m')->name('save_createstok_m');

    //opsi
    Route::get('/kategori/index/{id}', 'BarangController@data_kategori');

    //toko
    Route::get('/toko', 'TokoController@index');
    Route::post('/toko/save', 'TokoController@save');
    Route::post('/toko/update', 'TokoController@update')->name('update_toko');
    Route::get('/toko/delete/{id}', 'TokoController@delete')->name('delete_toko');

    //stok toko
    Route::get('/stok_toko', 'Stok_tokoController@index');
    Route::post('/stok_toko/save', 'Stok_tokoController@save');
    Route::post('/stok_toko/update', 'Stok_tokoController@update')->name('update_hrga_jual');
    Route::get('/stok_toko/delete/{id}', 'Stok_tokoController@delete')->name('delete_Stoko');

    Route::get('/kategori/index/{id}','BarangController@data_kategori');
    
    //barang terjual
    Route::get('/barang_terjual', 'Brg_terjualController@index');
    Route::post('/barang_terjual/save', 'Brg_terjualController@save');
    Route::post('/barang_terjual/update', 'Brg_terjualController@update')->name('update_brg_terjual');
    Route::get('/barang_terjual/delete/{id}', 'Brg_terjualController@delete')->name('delete_Bterjual');

    //Kategori
    Route::get('/kategori', 'KategoriController@index');
    Route::post('/kategori/save', 'KategoriController@save');
    Route::post('/kategori/update', 'KategoriController@update')->name('updatekategori');
    Route::get('/kategori/delete/{id}', 'KategoriController@delete')->name('deletekategori');
    // harga
    Route::get('/harga', 'HargaController@index');
    Route::post('/harga/save', 'HargaController@save');
    Route::post('/harga/update', 'HargaController@update')->name('updateharga');
    Route::get('/harga/delete/{id}', 'HargaController@delete')->name('deleteharga');

    //Reseller Data
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/reseller', 'ResellerController@index')->name('reseller');
    Route::get('/reseller/create', 'ResellerController@create')->name('createreseller');
    Route::get('/reseller/edit/{id}', 'ResellerController@edit');
    Route::get('/reseller/delete/{id}', 'ResellerController@delete');
    Route::post('/reseller/create/store', 'ResellerController@store')->name('storereseller');
    Route::post('/reseller/edit/{id}/update', 'ResellerController@update')->name('updatereseller');
    Route::get('/reseller/detail/{id}', 'ResellerController@show');

    //Provinsi
    Route::get('/wilayah', 'WilayahController@index_provinsi')->name('wilayah');
    Route::post('/wilayah/save', 'WilayahController@save_provinsi')->name('saveprovinsi');
    Route::post('/wilayah/update', 'WilayahController@update_provinsi')->name('updateprovinsi');
    Route::get('/wilayah/delete/{id}', 'WilayahController@delete_provinsi');

    //Kota
    Route::get('/wilayah/{provinsi}', 'WilayahController@index_kota');
    Route::post('/wilayah/{provinsi}/save', 'WilayahController@save_kota');
    Route::post('/wilayah/{provinsi}/update', 'WilayahController@update_kota');
    Route::get('/wilayah/{provinsi}/delete/{id}', 'WilayahController@delete_kota');

    //Kecamatan
    Route::get('/wilayah/{provinsi}/{kota}', 'WilayahController@index_kecamatan');
    Route::post('/wilayah/{provinsi}/{kota}/save', 'WilayahController@save_kecamatan');
    Route::post('/wilayah/{provinsi}/{kota}/update', 'WilayahController@update_kecamatan');
    Route::get('/wilayah/{provinsi}/{kota}/delete/{id}', 'WilayahController@delete_kecamatan');

    //Select Box Lokasi
    Route::get('/kota_provinsi/{id_provinsi}', 'WilayahController@kota_provinsi');
    Route::get('/kecamatan_kota/{id_kota}', 'WilayahController@kecamatan_kota');

    //Sliders
    Route::get('/slider','SliderController@index')->name('slider');
    Route::post('/slider/save','SliderController@save')->name('createslider');
    Route::post('/slider/update','SliderController@update')->name('updateslider');
    Route::get('/slider/delete/{id}','SliderController@delete')->name('deleteslider');
    
});
