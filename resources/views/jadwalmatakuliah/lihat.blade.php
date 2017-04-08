@extends('master')
@section('container')
<div class="panel panel-warning"> 	
	<div class="panel-heading">
		<strong><a href="{{url('jadwalmatakuliah')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Jadwal Mahasiswa
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>NIM Mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->mahasiswa->nim }}</td>
		</tr>
		<tr>
			<td>Mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->mahasiswa->nama }}</td>
		</tr>
		<tr>
			<td>Ruangan</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->ruangan->title }}</td>
		</tr>
		<tr>
			<td>Matakuliah</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->dosenmatakuliah->matakuliah->title }}</td>
		</tr>
		<tr>
			<td>Dosen</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->dosenmatakuliah->dosen->nip }}</td>
		</tr>
		<tr>
			<td>Dosen</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->dosenmatakuliah->dosen->nama }}</td>
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