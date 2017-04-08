@extends('master')
@section('container') 
<div class="panel panel-default"> 
	<div class="panel-default">
			<strong> SELURUH DATA DOSEN MENGAJAR </strong>
			<a href="{{url('dosenmatakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus" >Dosen Mengajar</i> </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
			<thead>
					<tr>
						<th>No.</th>
						<th>Dosen</th>
						<th>Matakuliah</th>
						<th>Aksi</th> 
					</tr>
			</thead>
			<tbody> 
				<?php $x=1; ?>
				@foreach ($seluruhDosenMatakuliah as $dosenmatakuliah)
					<tr>
						<td> {{$x++}}</td>
						<td> {{$dosenmatakuliah->dosen->nama or 'dosen kosong'}}</td>
						<td> {{$dosenmatakuliah->matakuliah->title or 'matakuliah kosong'}}</td>
						<td>
							<div class="btn-group" role="group"></div>
							<a href="{{url('dosenmatakuliah/edit/'.$dosenmatakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('dosenmatakuliah/lihat/'.$dosenmatakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('dosenmatakuliah/hapus/'.$dosenmatakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus">
								<i class="fa fa-remove"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
	</table>
</div>
@stop