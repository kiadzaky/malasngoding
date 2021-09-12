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
// Route::get('foto', function () {
// 	return view('foto');
// });
// Route::get('kia', function () {
//     return view('kia/index');
// });
Route::get('kia', 'KiaController@index');
//route foto
Route::get('foto/{nama}', 'FotoController@index');
Route::get('pendaftaran', 'KiaController@pendaftaran');
Route::post('pendaftaran/proses', 'KiaController@proses');

// blog template
Route::get('blog', 'BlogController@home');
Route::get('blog/tentang', 'BlogController@tentang');
Route::get('blog/kontak', 'BlogController@kontak');

//route pegawai
Route::get('pegawai', 'PegawaiController@index');
Route::get('pegawai/daftar', 'PegawaiController@daftar');
Route::post('pegawai/store', 'PegawaiController@store');
Route::get('pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
