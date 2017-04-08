<?php
/*File App\Http\DosenController.php*/
namespace App\Http\Controllers; 

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen; 
use App\Pengguna;

class DosenController extends Controller
{
    //
	public function awal()
    {
		# code...
		$semuadosen = dosen::all();
		return view('dosen.awal', compact('semuadosen'));
	}


	public function tambah()
	{
		# code...
		return view('dosen.tambah');
	}

	public function simpan(Request $input)
	{
		# code...
		$pengguna = new Pengguna($input->only('username','password'));
		if ($pengguna->save()) {
			# code...
			$dosen= new dosen();
			$dosen->nama = $input->nama;
			$dosen->nip = $input->nip;
			$dosen->alamat = $input->alamat;
			if ($pengguna->dosen()->save($dosen))
				$this->informasi='berhasil simpan data';
		}
		return redirect('dosen')->with(['informasi'=>$this->informasi]);
	}

	public function edit($id)
	{
		# code...
		$dosen = dosen::find($id);
		return view('dosen.edit')->with(array('dosen' => $dosen ));
	}
	public function lihat($id)
	{
		# code...
		$dosen = dosen::find($id);
		return view('dosen.lihat')->with(array('dosen' => $dosen ));	
	}
	public function update($id, Request $input)
	{
		# code...
		$dosen = dosen::find($id);
		$pengguna = $dosen->pengguna;
		$dosen->nama=$input->nama;
		$dosen->nip=$input->nip;
		$dosen->alamat=$input->alamat;
		$dosen->save();
		if (!is_null($input->username)) {
			# code...
			$pengguna->fill($input->only('username'));

			if (!empty($input->password)) {
				# code...
				$pengguna->password = $input->password;
			}
			if ($pengguna->save()) {
				# code...
				$this->informasi = 'Berhasil simpan data';
			}
			else{
				$this->informasi = 'Gagal simpan data';	
			}
		}
		return redirect('dosen')->with(['informasi'=>$this->informasi]);
	}
	public function hapus($id)
	{
		# code...
		$dosen = dosen::find($id);
		
			if ($dosen->pengguna()->delete()) {
				# code...
				if ($dosen->delete()) {
					# code...
					$this->informasi = 'Berhasil hapus data';
				}
			}
		
		return redirect('dosen')->with(['informasi'=>$this->informasi]);
	}
}
