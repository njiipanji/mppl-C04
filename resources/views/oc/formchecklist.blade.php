@extends('layouts.oc')

@section('title', 'Form Checklist Peserta')

@section('title-page', 'Checklist Peserta ' . $nrp)

@section('content')
	{{-- list pendaftar --}}

	<div class="col s12">
		<form style="margin-top: 50px;" action="/oc/checklist/input" method="post">
			{{ csrf_field() }}
			<div class="row">
				<input type="hidden" name="nrp" value="{{ $nrp }}">
				<div class="col s10 offset-s1 m4">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>Kemeja Putih:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Pakai
									<input type="checkbox" id="kemeja" name="kemeja">
									<span class="lever"></span>
									Pakai
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s10 offset-s1 m4">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>Almamater:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Bawa
									<input type="checkbox" id="almamater" name="almamater">
									<span class="lever"></span>
									Bawa
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s10 offset-s1 m4">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>Celana/Rok:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Pakai
									<input type="checkbox" id="celrok" name="celrok">
									<span class="lever"></span>
									Pakai
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s10 offset-s1 m4 offset-m2">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>Dasi:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Pakai
									<input type="checkbox" id="dasi" name="dasi">
									<span class="lever"></span>
									Pakai
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s10 offset-s1 m4">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>KTM:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Bawa
									<input type="checkbox" id="ktm" name="ktm">
									<span class="lever"></span>
									Bawa
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s8 offset-s2 m6 offset-m3 center">
					<?php $waktu_registrasi = date("Y/m/d H:i:s"); ?>
					<h5>{{ $waktu_registrasi }}</h5>
					<input type="hidden" name="waktu_registrasi" value="{{ $waktu_registrasi }}">
				</div>
			</div>
			<div class="row center" style="margin-top: 50px;">
				<a href="{{ URL::previous() }}" class="btn waves-effect waves-light red darken-2">Kembali</a>
				<button type="submit" class="btn waves-effect waves-light blue lighten-1">Masukkan</button>
			</div>
		</form>
	</div>
@endsection