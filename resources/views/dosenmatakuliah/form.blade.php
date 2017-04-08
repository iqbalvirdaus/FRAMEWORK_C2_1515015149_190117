<div class="form-group">
	<label class="col-sm-2 control-label">Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_id',$dosen->listDosenDanNip(),null,['class'=>'form-control','id'=>'dosen_id','placeholder'=>"id dosen"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"> Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::select('matakuliah_id',$matakuliah->lists('title','id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"Matakuliah"]) !!}
	</div>
</div>
