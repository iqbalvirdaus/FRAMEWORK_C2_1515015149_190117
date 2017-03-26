@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('ruangan')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail ruangan
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Title</td>
			<td>:</td>
			<td>{{ $ruangan->title }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$ruangan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$ruangan->updated_at}}</td>
		</tr>
		
	</table>
</div>
@stop