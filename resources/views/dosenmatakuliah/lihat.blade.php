@extends('master')
@section('container')
<div class="panel panel-warning"> 
	<div class="panel-heading">
		<strong><a href="{{url('dosenmatakuliah')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Dosen Mengajar
		</strong>
	</div> 
	<table class="table">
		<tr>
			<td>Dosen</td>
			<td>:</td>
			<td>{{ $dosenmatakuliah->dosen->nip }}</td>
		</tr>
		<tr>
			<td>Dosen</td>
			<td>:</td>
			<td>{{ $dosenmatakuliah->dosen->nama }}</td>
		</tr>
		<tr>
			<td>Mahasiswa</td>
			<td>:</td>
			<td>{{ $dosenmatakuliah->matakuliah->title }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$dosenmatakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$dosenmatakuliah->updated_at}}</td>
		</tr>
		
	</table>
</div>
@stop