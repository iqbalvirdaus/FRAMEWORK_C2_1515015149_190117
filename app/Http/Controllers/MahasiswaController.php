<?php
/*File App\Http\MahasiswaController.php*/
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mahasiswa;
use App\Pengguna;


class MahasiswaController extends Controller 
{
    //
    public function awal()
    {
		# code...
		return view('mahasiswa.awal', ['data'=>mahasiswa::all()]);
	}


	public function tambah()
	{
		# code...
		return view('mahasiswa.tambah');
	}

	public function simpan(Request $input)
	{
		# code...
		$mahasiswa= new mahasiswa();
		$mahasiswa->nama = $input->nama;
		$mahasiswa->nim = $input->nim;
		$mahasiswa->alamat = $input->alamat;
		$mahasiswa->pengguna_id = $input->pengguna_id;

		$informasi = $mahasiswa->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('mahasiswa')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		# code...
		$mahasiswa = mahasiswa::find($id);
		return view('mahasiswa.edit')->with(array('mahasiswa' => $mahasiswa ));
	}
	public function lihat($id)
	{
		# code...
		$mahasiswa = mahasiswa::find($id);
		return view('mahasiswa.lihat')->with(array('mahasiswa' => $mahasiswa ));	
	}
	public function update($id, Request $input)
	{
		# code...
		$mahasiswa = mahasiswa::find($id);
		$mahasiswa->nama=$input->nama;
		$mahasiswa->nim=$input->nim;
		$mahasiswa->alamat=$input->alamat;
		$mahasiswa->pengguna_id = $input->pengguna_id;
		$informasi = $mahasiswa->save()?'Berhasil update data' :'Gagal update data';
		return redirect('mahasiswa')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		# code...
		$mahasiswa = mahasiswa::find($id);
		$informasi = $mahasiswa->delete()?'Berhasil hapus data' :'Gagal hapus data';
		return redirect('mahasiswa')->with(['informasi'=>$informasi]);
	}
}
