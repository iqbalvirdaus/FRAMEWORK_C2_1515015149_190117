<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    //
     public function awal(){
		return "Hello ingin mengutak atik tabel Dosen";
	}

	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$Dosen= new Dosen();
		$Dosen->nama='bambang';
		$Dosen->nip='1973081720060909';
		$Dosen->alamat='jalan kuburan no.2';
		$Dosen->pengguna_id='3';
		$Dosen->save();

		return "data Dosen dengan nama {$Dosen->nama} telah tersimpan";

	}
}
