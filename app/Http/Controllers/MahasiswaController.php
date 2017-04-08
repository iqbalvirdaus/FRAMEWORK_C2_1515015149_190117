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
		$semuaMahasiswa = mahasiswa::all();
		return view('mahasiswa.awal', compact('semuaMahasiswa'));
	}


	public function tambah()
	{
		# code...
		return view('mahasiswa.tambah');
	}

	public function simpan(Request $input)
	{
		# code...
		$pengguna = new Pengguna($input->only('username','password'));
		if ($pengguna->save()) {
			# code...
			$mahasiswa= new mahasiswa();
			$mahasiswa->nama = $input->nama;
			$mahasiswa->nim = $input->nim;
			$mahasiswa->alamat = $input->alamat;
			if ($pengguna->mahasiswa()->save($mahasiswa))
				$this->informasi='berhasil simpan data';
		} 
		return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
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
		$pengguna = $mahasiswa->pengguna;
		$mahasiswa->nama=$input->nama;
		$mahasiswa->nim=$input->nim;
		$mahasiswa->alamat=$input->alamat;
		$mahasiswa->save();
		if (!is_null($input->username)) {
			# code...
			$pengguna->fill($input->only('username'));

			if (!empty($input->password)) {
				# code...
				$pengguna->password = $input->password;
			}
			if ($mahasiswa->save()) {
				# code...
				$this->informasi = 'Berhasil simpan data';
			}
			else{
				$this->informasi = 'Gagal simpan data';	
			}
		}
		return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
	}
	public function hapus($id)
	{
		# code...
		$mahasiswa = mahasiswa::find($id);
		
			if ($mahasiswa->pengguna()->delete()) {
				# code...
				if ($mahasiswa->delete()) {
					# code...
					$this->informasi = 'Berhasil hapus data';
				}
			}
		
		return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
	}
}
