<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function awal(){
		return "Hello ingin mengutak atik tabel mahasiswa";
	}

	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$Mahasiswa= new Mahasiswa();
		$Mahasiswa->nama='iqbal';
		$Mahasiswa->nim='1515015149';
		$Mahasiswa->alamat='jalan Wachid hasyim 1';
		$Mahasiswa->pengguna_id=1;
		$Mahasiswa->save();

		return "data mahasiswa dengan nama {$Mahasiswa->nama} telah tersimpan";

	}
}
