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
use Illuminate\Http\Request;
/*login*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::post('/','SesiController@index');




/*routing RelationshipRebornController*/
Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');
Route::get('likeS',
		function ()
		{
			# code...
			return	\App\DosenMatakuliah::whereHas('dosen',function($query){
						$query->where('nama','like','%s%');

					})->with('dosen')->groupBy('dosen_id')->get();
		}
	);
Route::get('likeSs',
		function ()
		{
			# code...
			return	\App\DosenMatakuliah::whereHas('dosen',function($query){
						$query->where('nama','like','%s%');
				})->orWhereHas('matakuliah',function ($kuery)
				{
					# code...
				
					$kuery->where('title','like','%a%');
				})->with('dosen','matakuliah')->groupBy('dosen_id')->get();
		}
	);
Route::group(['middleware'=>'AuthentifikasiUser'],function(){

	/*routing table pengguna*/
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

/*routing table jadwal_matakuliah*/
Route::get('jadwalmatakuliah','jadwalmatakuliahController@awal');
Route::get('jadwalmatakuliah/tambah','jadwalmatakuliahController@tambah');
Route::get('jadwalmatakuliah/lihat/{jadwalmatakuliah}','jadwalmatakuliahController@lihat');
Route::post('jadwalmatakuliah/simpan','jadwalmatakuliahController@simpan');
Route::get('jadwalmatakuliah/edit/{jadwalmatakuliah}','jadwalmatakuliahController@edit');
Route::post('jadwalmatakuliah/edit/{jadwalmatakuliah}','jadwalmatakuliahController@update');
Route::get('jadwalmatakuliah/hapus/{jadwalmatakuliah}','jadwalmatakuliahController@hapus');

/*routing table dosen_matakuliah*/
Route::get('dosenmatakuliah','dosenmatakuliahController@awal');
Route::get('dosenmatakuliah/tambah','dosenmatakuliahController@tambah');
Route::get('dosenmatakuliah/lihat/{dosenmatakuliah}','dosenmatakuliahController@lihat');
Route::post('dosenmatakuliah/simpan','dosenmatakuliahController@simpan');
Route::get('dosenmatakuliah/edit/{dosenmatakuliah}','dosenmatakuliahController@edit');
Route::post('dosenmatakuliah/edit/{dosenmatakuliah}','dosenmatakuliahController@update');
Route::get('dosenmatakuliah/hapus/{dosenmatakuliah}','dosenmatakuliahController@hapus');

/*routing table ruangan*/
Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');
Route::get('ruangan/lihat/{ruangan}','ruanganController@lihat');
Route::post('ruangan/simpan','ruanganController@simpan');
Route::get('ruangan/edit/{ruangan}','ruanganController@edit');
Route::post('ruangan/edit/{ruangan}','ruanganController@update');
Route::get('ruangan/hapus/{ruangan}','ruanganController@hapus');
/*

/*routing table dosen*/
Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');
Route::get('dosen/lihat/{dosen}','dosenController@lihat');
Route::post('dosen/simpan','dosenController@simpan');
Route::get('dosen/edit/{dosen}','dosenController@edit');
Route::post('dosen/edit/{dosen}','dosenController@update');
Route::get('dosen/hapus/{dosen}','dosenController@hapus');

/*routing table matakuliah*/
Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahController@lihat');
Route::post('matakuliah/simpan','matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahController@hapus');

/*routing table mahasiswa*/
Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');
Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');

});




Route::get('/', function () {
    return view('master');
  /*  echo "Hasil dari Input tadi nama : ".$request->nama;*/
});


/*Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna','PenggunaController@awal');*/

/*Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "hello pengguna $pengguna";
});*/

/*Route::get('hello-world', function () {
    return 'hello hello hello';
});

Route::get('/public', function () {
    return ('Nama saya Iqbal Virdaus Septian Siregar');
});*/



/*Route::post('/', function (Request $request) {
    //return view('master');
    echo "Hasil dari Input tadi nama : ".$request->nama;
});*/
/*
Route::get('/', function () {
    echo Form::open(['url'=>'/']),
    	 Form::label('nama'),
    	 Form::text('nama',null),
    	 Form::submit('kirim'),
    	 Form::close();
});*/
/*Route::get('/', function (Illuminate\Http\Request $request) {
    //return view('master');
    echo "ini adalah request dari method get ".$request->nama;
});*/






/*Route::auth();

Route::get('/home', 'HomeController@index');*/
