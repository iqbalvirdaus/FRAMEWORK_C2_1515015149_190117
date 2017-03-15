<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    //
     public function awal(){
		return "Hello ingin mengutak atik tabel matakuliah";
	}

	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$matakuliah= new matakuliah();
		$matakuliah->title='Pemrograman Framework';
		$matakuliah->keterangan='teori di kelas';
		$matakuliah->save();

		return "data matakuliah dengan title {$matakuliah->title} telah tersimpan";

	}
}
