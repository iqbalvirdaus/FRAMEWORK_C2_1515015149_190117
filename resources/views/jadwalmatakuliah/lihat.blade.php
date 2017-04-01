@extends('master')
@section('container')
<div class="panel panel-warning"> 
	<div class="panel-heading">
		<strong><a href="{{url('jadwalmatakuliah')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Jadwal Matakuliah
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>ID Mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->mahasiswa_id }}</td>
		</tr>
		<tr>
			<td>ID Ruangan</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->ruangan_id }}</td>
		</tr>
		<tr>
			<td>ID Dosen Matakuliah</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->dosen_matakuliah_id }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$jadwalmatakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$jadwalmatakuliah->updated_at}}</td>
		</tr>
		
	</table>
</div>
@stop