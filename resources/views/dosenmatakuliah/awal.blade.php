@extends('master')
@section('container') 
<div class="panel panel-default"> 
	<div class="panel-default">
			<strong> SELURUH DATA DOSEN MATAKULIAH </strong>
			<a href="{{url('dosenmatakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus" >Dosen Matakuliah</i> </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
			<thead>
					<tr>
						<th>No.</th>
						<th>ID. Dosen</th>
						<th>ID. Matakuliah</th>
						<th>Aksi</th> 
					</tr>
			</thead>
			<tbody> 
				<?php $x=1; ?>
				@foreach ($data as $dosenmatakuliah)
					<tr>
						<td> {{$x++}}</td>
						<td> {{$dosenmatakuliah->dosen_id or 'dosen_id kosong'}}</td>
						<td> {{$dosenmatakuliah->ruangan_id or 'ruangan_id kosong'}}</td>
						<td> {{$dosenmatakuliah->matakuliah_id or 'matakuliah_id kosong'}}</td>
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