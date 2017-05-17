@extends('layouts.peserta')

@section('title', 'Halaman Berkas')

@section('title-page', 'Halaman Upload Berkas')

@section('content')
	{{-- If belum terdaftar--}}
{{-- 	<div class="col s12 center" style="margin-top: 50px;">
		<h3 style="margin-bottom: 0px;">Anda belum terdaftar.</h3>
		<h6 style="margin-bottom: 25px;"><em>Silahkan daftar terlebih dahulu</em></h6>
		<a href="{{ url('/peserta/daftar') }}" class="btn waves-effect waves-light">Daftar</a>
	</div> --}}

	{{-- form daftar --}}
	<div class="col s8 offset-s2" style="margin-top: 50px;">
		<form enctype="multipart/form-data">
			<div class="row">
				<div class="file-field input-field col s10 offset-s1 col m8 offset-m2">
					<div class="btn">
					<span>File</span>
						<input type="file" id="berkas" name="berkas">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
			</div>
			<div class="row center" style="margin-top: 50px;">
				<button type="submit" class="btn waves-effect waves-light">Upload</button>
				{{-- If sudah upload, tampilkan button ini --}}
				{{-- <button type="submit" class="btn waves-effect waves-light">Reupload</button> --}}
			</div>
		</form>
	</div>

	{{-- If sudah upload, tampilkan pesan --}}
	<div class="col s12 center" style="margin-top: 50px;">
		<h6>Anda sudah upload berkas sebelumnya, download <a href="#!"><strong>berkas</strong></a>.</h6>
	</div>
@endsection