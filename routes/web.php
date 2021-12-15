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

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tugas4jQuery');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');

Route::get('ets', 'ViewController@showETS');

Route::get('tugasphp', 'ViewController@showForm');
Route::get('exponentnumber', 'ViewController@exponentfunc');

//route CRUD (pegawai)
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}', 'PegawaiController@view');

//route CRUD (absen)
Route::get('/absen', 'AbsenController@index');
Route::get('/absen/tambah', 'AbsenController@tambah');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//route CRUD
Route::get('/minuman','MinumanController@index');
Route::get('/minuman/tambah','MinumanController@tambah');
Route::post('/minuman/store','MinumanController@store');
Route::get('/minuman/edit/{kode}','MinumanController@edit');
Route::post('/minuman/update','MinumanController@update');
Route::get('/minuman/hapus/{kode}','MinumanController@hapus');
Route::get('/minuman/cari','MinumanController@cari');
Route::get('/minuman/detail/{kode}', 'MinumanController@view');

//route CRUD
Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/edit/{nip}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/detail/{nip}', 'Karyawan1Controller@view');
