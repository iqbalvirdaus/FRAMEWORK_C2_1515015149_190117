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
    protected $informasi ='gagal melakukan aksi';
   public function awal()
   {
		# code...
   		$seluruhDosenMatakuliah = dosenmatakuliah::all();
		return view('dosenmatakuliah.awal',compact('seluruhDosenMatakuliah'));
	}

	public function tambah()
	{
		# code...
		$dosen = new dosen;
		$matakuliah = new matakuliah;
		return view('dosenmatakuliah.tambah',compact('dosen','matakuliah'));
		return $this->simpan();
	}
	public function simpan(Request $input)
	{
		# code...
		$dosenmatakuliah= new dosenmatakuliah($input->only('dosen_id','matakuliah_id'));

	//	$seluruhDosenMatakuliah->save();
		if ($dosenmatakuliah->save()) {
			# code...
			$this->informasi="Jadwal Dosen Mengajar";
		}
		
		return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
	}
	public function edit($id)
	{
		# code...
		$dosenmatakuliah=dosenmatakuliah::find($id);
		$dosen = new dosen();
		$matakuliah = new matakuliah();
		return view('dosenmatakuliah.edit',compact('dosenmatakuliah','dosen','matakuliah'));
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
		//$dosenmatakuliah=fill( $input->only('dosen_id','matakuliah_id'));
		if ($dosenmatakuliah->save()) {
			# code...
			$this->informasi="Jadwal Dosen Mengajar telah diperbaharui";
		}
		  
		return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
	}
	public function hapus($id)
	{
		# code...
		$dosenmatakuliah=dosenmatakuliah::find($id);
		if ($dosenmatakuliah->delete()) {
			# code...
			$this->informasi ='Berhasil hapus data';
		}
		return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
	}
}
