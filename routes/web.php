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
Route::resource('kategoripakaian','KategoriController');
Route::resource('produkpakaian','ProdukController');
Route::get('daftar','ProdukController@daftar')->name('daftar');
Route::get('show/{id}','ProdukController@show');
Route::get('detail/{id}','ProdukController@detail')->name('detailproduk');
Route::resource('pesanan','PesananController');
Route::resource('kembali','PengembalianController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
