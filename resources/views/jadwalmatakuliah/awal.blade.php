@extends('master')
@section('container') 
<div class="panel panel-default">
	<div class="panel-default">
			<strong> SELURUH DATA JADWAL MATAKULIAH </strong>
			<a href="{{url('jadwalmatakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus" >Jadwal Matakuliah</i> </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
			<thead>
					<tr>
						<th>No.</th>
						<th>Nama Mahasiswa</th>
						<th>NIM Mahasiswa</th>
						<th>Nama Matakuliah</th>
						<th>Nama Dosen</th>
						<th>Ruangan</th>
						<th>Aksi</th> 
					</tr>
			</thead>
			<tbody>
				<?php $x=1; ?>
				@foreach ($semuaJadwalMatakuliah as $jadwalmatakuliah)
					<tr>
						<td> {{$x++}}</td>
						<td> {{$jadwalmatakuliah->mahasiswa->nama or 'nama kosong'}}</td>
						<td> {{$jadwalmatakuliah->mahasiswa->nim or 'nim kosong'}}</td>
						<td> {{	$jadwalmatakuliah->dosenmatakuliah->matakuliah->title or ' matakuliah kosong'}}</td>
						<td> {{$jadwalmatakuliah->dosenmatakuliah->dosen->nama or 'nama dosen matakuliah kosong'}}</td>
						<td> {{$jadwalmatakuliah->ruangan->title or 'ruangan kosong'}}</td>


						<td>
							<div class="btn-group" role="group"></div>
							<a href="{{url('jadwalmatakuliah/edit/'.$jadwalmatakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('jadwalmatakuliah/lihat/'.$jadwalmatakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('jadwalmatakuliah/hapus/'.$jadwalmatakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus">
								<i class="fa fa-remove"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
	</table>
</div>
@stop