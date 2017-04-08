<div class="form-group">
	<label class="col-sm-2 control-label">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','id'=>'mahasiswa_id','placeholder'=>" Mahasiswa"]) !!}
	</div>
</div> 
<div class="form-group">
	<label class="col-sm-2 control-label"> Matakuliah </label>
	<div class="col-sm-10">
		{!! Form::select('dosen_matakuliah_id',$dosenmatakuliah->listDosenDanMatakuliah(),null,['class'=>'form-control','id'=>'dosen_matakuliah_id','placeholder'=>" matakuliah"]) !!}
	</div>
</div> 
<div class="form-group">
	<label class="col-sm-2 control-label"> Ruangan </label>
	<div class="col-sm-10">
		{!! Form::select('ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','id'=>'ruangan_id','placeholder'=>"Ruangan"]) !!}
	</div>
</div>
