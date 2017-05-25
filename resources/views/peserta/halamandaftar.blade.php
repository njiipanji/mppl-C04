@extends('layouts.peserta')

@section('title', 'Halaman Daftar')

@section('title-page', 'Halaman Daftar')

@section('style')
	.input-field {
		margin-top: 0px;
	}
@endsection

@section('content')
	@if($pesertas->isEmpty())
		<div class="col s8 offset-s2" style="margin-top: 50px;">
			<form action="/peserta/daftar" method="POST">
				{{ csrf_field() }}
				<div class="row">
					<div class="input-field col s10 offset-s1 col m8 offset-m2">
						<input id="nrp" name="nrp" type="text" disabled value="{{ Auth::user()->nrp }}">
						<label for="nrp">NRP</label>
					</div>
					<div class="input-field col s10 offset-s1 col m8 offset-m2">
						<input id="nama" name="nama" type="text">
						<label for="nama">Nama Lengkap</label>
					</div>
					<div class="input-field col s10 offset-s1 col m8 offset-m2">
						<input id="motivasi" name="motivasi" type="text">
						<label for="motivasi">Motivasi Mendaftar</label>
					</div>
					<div class="input-field col s10 offset-s1 col m8 offset-m2">
						<input id="check" name="check" type="checkbox" required>
						<label for="check">Saya setuju untuk mendaftar LKMM Pra-TD FTIf ITS!</label>
					</div>
				</div>
				<div class="row center" style="margin-top: 50px;">
					<button type="submit" class="btn waves-effect waves-light">Daftar</button>
				</div>
			</form>
		</div>
	@else
		<div class="col s12 center" style="margin-top: 50px;">
			<h3 style="margin-bottom: 0px;">Anda sudah terdaftar.</h3>
			<h6 style="margin-bottom: 25px;"><em>Silahkan lengkapi berkas-berkas yang diperlukan!</em></h6>
			<a href="{{ url('/peserta') }}" class="btn waves-effect waves-light red darken-2">Kembali</a>
			<a href="{{ url('/peserta/berkas') }}" class="btn waves-effect waves-light">Lengkapi Berkas</a>
		</div>
	@endif
@endsection