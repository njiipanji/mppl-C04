@extends('layouts.peserta')

@section('title', 'Halaman Berkas')

@section('title-page', 'Halaman Upload Berkas')

@section('style')
	#toast-container {
		top: 40% !important;
		right: 35% !important;
	}
@endsection

@section('content')
	@if($pesertas->isEmpty())
		<div class="col s12 center" style="margin-top: 50px;">
			<h3 style="margin-bottom: 0px;">Anda belum terdaftar.</h3>
			<h6 style="margin-bottom: 25px;"><em>Silahkan daftar terlebih dahulu</em></h6>
			<a href="{{ url('/peserta/daftar') }}" class="btn waves-effect waves-light">Daftar</a>
		</div>

	{{-- form daftar --}}
	@else
		<div class="col s8 offset-s2" style="margin-top: 50px;">
			<form action="/peserta/berkas" enctype="multipart/form-data" method="post">
				{{ csrf_field() }}
				<div class="row center">
					<div class="file-field input-field col s10 offset-s1 col m8 offset-m2">
						<div class="btn">
						<span>File</span>
							<input type="file" id="berkas" name="berkas">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<div class="col s10 offset-s1 col m8 offset-m2">
						<h6>Berkas dikirim dengan extensi <strong>*.zip</strong> dan ukuran berkas maksimal <strong>2MB</strong>.</h6>
					</div>
				</div>
				<div class="row center" style="margin-top: 50px;">
					@if(!$berkass)
						<button type="submit" class="btn waves-effect waves-light">Upload</button>
					@else
						{{-- If sudah upload, tampilkan button ini --}}
						<input type="hidden" name="_method" value="PUT">
						<button type="submit" class="btn waves-effect waves-light blue">Reupload</button>
					@endif
				</div>
			</form>
		</div>
	@endif

	@foreach($berkass as $berkas)
		@if($berkas != '[]')
			{{-- If sudah upload, tampilkan pesan --}}
			<div class="col s12 center" style="margin-top: 50px;">
				@foreach($berkass as $berkas)
					<h6>Anda sudah upload berkas sebelumnya, download <a href="{{ url('/'.$berkas->berkas_link) }}"><strong>berkas</strong></a>.</h6>
				@endforeach
			</div>
		@endif
	@endforeach
@endsection

@section('script')
	@if($errors->has('berkas'))
		Materialize.toast('{{ $errors->first() }}', 4000);
	@endif
@endsection