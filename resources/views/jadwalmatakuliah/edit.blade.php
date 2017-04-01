@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong> <a href="{{url('jadwalmatakuliah')}}">
		<i class="fa text-default fa-chevron-left"></i> 
		</a>Perbarui data Jadwal MataKuliah</strong>
	</div>
	{!! Form::model($jadwalmatakuliah,['url'=>'jadwalmatakuliah/edit/'.$jadwalmatakuliah->id ,'class'=>'form-horizontal']) !!}
	@include('jadwalmatakuliah.form')
		<div style="width:100%;text-align: right;">
			<button class="btn btn-info">
				<i class="fa fa-save"></i>Perbarui
			</button>
			<button type="reset" class="btn btn-danger">
				<i class="fa fa-undo"></i>Ulangi
			</button>
		</div>
		{!! Form::close() !!}
</div>
@stop