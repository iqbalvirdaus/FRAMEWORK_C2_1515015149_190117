<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_matakuliah;

class Dosen_matakuliahController extends Controller
{
    //
    public function awal(){
		return "Hello ingin mengutak atik tabel Dosen matakuliah";
	}

	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$Dosen_matakuliah= new Dosen_matakuliah();
		$Dosen_matakuliah->dosen_id=1;
		$Dosen_matakuliah->matakuliah_id=1;
		$Dosen_matakuliah->save();

		return "data Dosen_matakuliah telah tersimpan";

	}
}
