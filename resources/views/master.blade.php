<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title', 'Halaman Awal') | Laboratorium FW</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<link rel="icon" href="{!! asset('images/UNMUL.jpg') !!}"/>

	<style type="text/css">
		body{
			padding-top: 70px;
			padding-bottom: 70px
		}

		.startter-template{
			padding: 40px 15px;
			text-align: center;
		}

		.form-horizontal{
			padding: 15px 10px;
		}

		footer{
			padding-top: 15px;
			text-align: right;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{url('/')}}" class="navbar-brand">Laravel-5</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mahasiswa
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('mahasiswa')}}">Data Mahasiswa</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{url('jadwalmatakuliah')}}">Jadwal Mahasiswa</a>
							</li>
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dosen
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('dosen')}}">Data Dosen</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{url('dosenmatakuliah')}}">Jadwal Dosen Mengajar</a>
							</li>
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengaturan
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('pengguna')}}">Pengguna</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{url('ruangan')}}">Ruangan</a>
							</li>
							<li>
								<a href="{{url('matakuliah')}}">Matakuliah</a>
							</li>
						</ul>
					</li>					
				</ul>
			</div>
		</div>
	</nav>
	<div class="clearfix"></div>
	<div class="container">
		@if(Session::has('informasi'))
			<div class="alert alert-info">
				<strong>Informasi :</strong>
				{{Session::get('informasi')}}
			</div>
			@endif
			@yield('container')
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
			
		</footer>
	</nav>
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
		$(function(){
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>
</body>
</html>