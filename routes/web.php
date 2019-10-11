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

Route::get('/Baju', 'NamaController@index');

Route::get('/Obat', 'BiodataController@index');

Route::get('/Sepatu', 'SepatuController@index');

Route::get('/Dokter', 'DokterController@index');

Route::get('/Kaos', 'KaosController@index');

Route::get('/Barang', 'BarangController@index');

Route::get('/User', 'UserController@index');

Route::get('/Katagori', 'KatagoriController@index');

Route::get('/Satuan', 'SatuanController@index');
