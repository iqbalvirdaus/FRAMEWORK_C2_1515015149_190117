<?php
/*File App\Http\JadwalMatakuliahController.php*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\jadwalmatakuliah;
class JadwalMatakuliahController extends Controller
{
    //
   public function awal()
   {
		# code...
		return view('jadwalmatakuliah.awal', ['data'=>jadwalmatakuliah::all()]);
	}

	public function tambah()
	{
		# code... 
		return view('jadwalmatakuliah.tambah');
	}
	public function simpan(Request $input)
	{
		# code...
		$jadwalmatakuliah= new JadwalMatakuliah();
		$jadwalmatakuliah->username=$input->username;
		$jadwalmatakuliah->password=$input->password;
		$informasi = $jadwalmatakuliah->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		# code...
		$jadwalmatakuliah=JadwalMatakuliah::find($id);
		return view('jadwalmatakuliah.edit')->with(array('jadwalmatakuliah' => $jadwalmatakuliah ));
	}
	public function lihat($id)
	{
		# code...
		$jadwalmatakuliah = JadwalMatakuliah::find($id);
		return view('jadwalmatakuliah.lihat')->with(array('jadwalmatakuliah' => $jadwalmatakuliah ));	
	}
	public function update($id, Request $input)
	{
		# code...
		$jadwalmatakuliah = jadwalmatakuliah::find($id);
		$jadwalmatakuliah ->username=$input->username;
		$jadwalmatakuliah ->password=$input->password;
		$informasi = $jadwalmatakuliah->save()?'Berhasil update data' :'Gagal update data';
		return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		# code...
		$jadwalmatakuliah = jadwalmatakuliah::find($id);
		$informasi = $jadwalmatakuliah->delete()?'Berhasil hapus data' :'Gagal hapus data';
		return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
	}

}
