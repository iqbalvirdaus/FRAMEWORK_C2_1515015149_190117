<?php
/*File App\Http\JadwalMatakuliahController.php*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\JadwalMatakuliah;
use App\mahasiswa;
use App\dosenmatakuliah;
use App\ruangan;

class JadwalMatakuliahController extends Controller
{
    //
   protected $informasi = 'gagal melakukan aksi';
   public function awal()
   {
		# code...
   	$semuaJadwalMatakuliah = jadwalmatakuliah::all();
		return view('jadwalmatakuliah.awal',compact('semuaJadwalMatakuliah'));

	}

	public function tambah()
	{
		# code... 
		$mahasiswa = new Mahasiswa;
		$ruangan = new Ruangan;
		$dosenmatakuliah = new dosenmatakuliah;
		return view('jadwalmatakuliah.tambah',compact('mahasiswa','ruangan','dosenmatakuliah'));
	}
	public function simpan(Request $input)
	{
		# code...
		$jadwalmatakuliah= new JadwalMatakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
		//$semuaJadwalMatakuliah->save();
			if ($jadwalmatakuliah->save()) {
				# code...
				$this->informasi="Jadwal Mahasiswa berhasil disimpan";
			}
		return redirect('jadwalmatakuliah')->with(['informasi'=>$this->informasi]);
	}
	public function edit($id)
	{
		# code...
		$jadwalmatakuliah=JadwalMatakuliah::find($id);
		$mahasiswa = new Mahasiswa;
		$ruangan = new Ruangan;
		$dosenmatakuliah = new DosenMatakuliah;
		return view('jadwalmatakuliah.edit',compact('mahasiswa','ruangan','dosenmatakuliah','jadwalmatakuliah'));
	} 	
	public function lihat($id)
	{
		# code...
		$jadwalmatakuliah = JadwalMatakuliah::find($id);
		return view('jadwalmatakuliah.lihat',compact('jadwalmatakuliah'));	
	}
	public function update($id, Request $input)
	{
		# code...
		$jadwalmatakuliah = jadwalmatakuliah::find($id);

		$jadwalmatakuliah->mahasiswa_id = $input->mahasiswa_id;
		$jadwalmatakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
		$jadwalmatakuliah->ruangan_id = $input->ruangan_id;

		//$jadwalmatakuliah = fill($input->only('ruangan_id','dosenmatakuliah_id','mahasiswa_id'));
		if ($jadwalmatakuliah->save()) {
			# code...
			$this->informasi="Jadwak Mahasiswa Berhasil di perbarui";
		}
		
		return redirect('jadwalmatakuliah')->with(['informasi'=>$this->informasi]);
	}
	public function hapus($id)
	{
		# code...
		$jadwalmatakuliah = jadwalmatakuliah::find($id);
		if ($jadwalmatakuliah->delete()) {
			# code...
			$this->informasi="Jadwal Mahasiswa berhasil di hapus";
		}
		return redirect('jadwalmatakuliah')->with(['informasi'=>$this->informasi]);
	}

}
