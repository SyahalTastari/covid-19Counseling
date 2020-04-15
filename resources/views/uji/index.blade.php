@extends('layout.master')
@section('judul', 'Halaman Uji')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				@if(session('sukses'))
				<div class="alert alert-success" role="alert">
					{{session('sukses')}}
				</div>
				@endif
				@if(session('warning'))
				<div class="alert alert-warning" role="alert">
					{{session('warning')}}
				</div>
				@endif
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
									<h3 class="panel-title-midle">HALAMAN PENGETESAN</h3>
									<p>Note: *Saat mengisi pertanyaan santai aja yahh engga usah gugup, kaya ketemu dia</p>
									
								</div>
								<form action="/uji/{{auth()->user()->id}}/pengisian">
								<button type="submit" class="btn btn-primary btn-block btn-lg">Tekan Untuk Memulai Tesnya</button>
								</form>


@stop




