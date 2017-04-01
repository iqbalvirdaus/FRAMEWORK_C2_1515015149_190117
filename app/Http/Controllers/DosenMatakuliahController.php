<?php
/*File App\Http\DosenMatakuliahController.php*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\dosenmatakuliah;
use App\dosen;
use App\Matakuliah;

class dosenmatakuliahController extends Controller
{
    //
   public function awal()
   {
		# code...
		return view('dosenmatakuliah.awal', ['data'=>dosenmatakuliah::all()]);
	}

	public function tambah()
	{
		# code...
		return view('dosenmatakuliah.tambah');
	}
	public function simpan(Request $input)
	{
		# code...
		$dosenmatakuliah= new dosenmatakuliah();
		$dosenmatakuliah->dosen_id=$input->dosen_id;
		$dosenmatakuliah->matakuliah_id=$input->matakuliah_id;
		$informasi = $dosenmatakuliah->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		# code...
		$dosenmatakuliah=dosenmatakuliah::find($id);
		return view('dosenmatakuliah.edit')->with(array('dosenmatakuliah' => $dosenmatakuliah ));
	}
	public function lihat($id)
	{
		# code...
		$dosenmatakuliah = dosenmatakuliah::find($id);
		return view('dosenmatakuliah.lihat')->with(array('dosenmatakuliah' => $dosenmatakuliah ));	
	}
	public function update($id, Request $input)
	{
		# code...
		$dosenmatakuliah= dosenmatakuliah::find($id);
		$dosenmatakuliah->dosen_id=$input->dosen_id;
		$dosenmatakuliah->matakuliah_id=$input->matakuliah_id;
		$informasi = $dosenmatakuliah->save()?'Berhasil update data' :'Gagal update data';
		return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		# code...
		$dosenmatakuliah=dosenmatakuliah::find($id);
		$informasi = $dosenmatakuliah->delete()?'Berhasil hapus data' :'Gagal hapus data';
		return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
	}
}
