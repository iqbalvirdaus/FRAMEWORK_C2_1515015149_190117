<?php
/*File DosenController.php*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
{
    //
	public function awal(){
		//return "Hello dari PenggunaController";
		return view('ruangan.awal',['data'=>ruangan::all()]);
	}

	public function tambah(){
		//return $this->simpan();
		return view('ruangan.tambah');
	}
	public function simpan(Request $input){
		$ruangan= new ruangan();
		$ruangan->title = $input->title;
		$informasi = $ruangan->save()?'Berhasil simpan data' :'Gagal simpan data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
		//$ruangan->save();
		//return "data dengan username {$ruangan->username} telah disimpan";
	}
	public function edit($id){
		$ruangan=ruangan::find($id);
		return view('ruangan.edit')->with(array('ruangan' => $ruangan ));
	}
	public function lihat($id){
		$ruangan=ruangan::find($id);
		return view('ruangan.lihat')->with(array('ruangan' => $ruangan ));	
	}
	public function update($id,Request $input){
		$ruangan= ruangan::find($id);
		$ruangan->title=$input->title;
		$informasi = $ruangan->save()?'Berhasil update data' :'Gagal update data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$ruangan=ruangan::find($id);
		$informasi = $ruangan->delete()?'Berhasil hapus data' :'Gagal hapus data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
	}



}
