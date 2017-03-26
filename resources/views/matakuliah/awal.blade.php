@extends('master') 
@section('container')
<div class="panel panel-default">
	<div class="panel-default">
			<strong> SELURUH DATA MATAKULIAH </strong>
			<a href="{{url('matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"> <i class="clearfix">matakuliah</i> </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
			<thead>
					<tr>
						<th>No.</th>
						<th>Title</th>
						<th>Keterangan</th>
						<th>Aksi</th>
					</tr>
			</thead>
			<tbody>
				<?php $x=1; ?>
				@foreach ($data as $matakuliah)
					<tr>
						<td> {{$x++}}</td>
						<td> {{$matakuliah->title or 'Title kosong'}}</td>
						<td> {{$matakuliah->keterangan or 'keterangan kosong'}}</td>
						<td>
							<div class="btn-group" role="group"></div>
							<a href="{{url('matakuliah/edit/'.$matakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('matakuliah/lihat/'.$matakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('matakuliah/hapus/'.$matakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus">
								<i class="fa fa-remove"></i>
							</a>


						</td>
					</tr>
				@endforeach
			</tbody>
		
	</table>


</div>
@stop