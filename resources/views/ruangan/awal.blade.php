@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-default">
			<strong> SELURUH DATA RUANGAN </strong>
			<a href="{{url('ruangan/tambah')}}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"> Ruangan</i> </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
			<thead>
					<tr>
						<th>No.</th>
						<th>Title</th>
						<th>Aksi</th>
					</tr>
			</thead>
			<tbody>
				<?php $x=1; ?>
				@foreach ($data as $ruangan)
					<tr>
						<td> {{$x++}}</td>
						<td> {{$ruangan->title or 'title kosong'}}</td>
						<td>
							<div class="btn-group" role="group"></div>
							<a href="{{url('ruangan/edit/'.$ruangan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('ruangan/lihat/'.$ruangan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('ruangan/hapus/'.$ruangan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus">
								<i class="fa fa-remove"></i>
							</a>


						</td>
					</tr>
				@endforeach
			</tbody>
		
	</table>


</div>
@stop