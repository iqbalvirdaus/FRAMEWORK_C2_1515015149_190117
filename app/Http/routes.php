<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*routing table jadwal_matakuliah*/
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');
Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');

/*routing table dosen_matakuliah*/
Route::get('dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');
Route::get('dosen_matakuliah','Dosen_matakuliahController@awal');

/*routing table ruangan*/
Route::get('Ruangan/tambah','RuanganController@tambah');
Route::get('Ruangan','RuanganController@awal');

/*routing table dosen*/
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen','DosenController@awal');

/*routing table matakuliah*/
Route::get('matakuliah/tambah','matakuliahController@tambah');
Route::get('matakuliah','matakuliahController@awal');

/*routing table mahasiswa*/
Route::get('mahasiswa/tambah','mahasiswaController@tambah');
Route::get('mahasiswa','mahasiswaController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna','PenggunaController@awal');

Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "hello pengguna $pengguna";
});

Route::get('hello-world', function () {
    return 'hello hello hello';
});

Route::get('/public', function () {
    return ('Nama saya Iqbal Virdaus Septian Siregar');
});

Route::get('/', function () {
    return view('welcome');
});





