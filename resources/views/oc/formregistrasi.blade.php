@extends('layouts.oc')

@section('title', 'Form Registrasi Materi Peserta')

@section('title-page', 'Registrasi Materi Peserta ' . $nrp)

@section('content')
	{{-- list pendaftar --}}
	<div class="col s12">
		<form style="margin-top: 50px;">
			<div class="row">
				<div class="col s10 offset-s1 m4">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>Materi 1:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Hadir
									<input type="checkbox" id="materi1" name="materi1" checked="on">
									<span class="lever"></span>
									Hadir
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s10 offset-s1 m4">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>Materi 2:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Hadir
									<input type="checkbox" id="materi2" name="materi2">
									<span class="lever"></span>
									Hadir
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s10 offset-s1 m4">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>Materi 3:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Hadir
									<input type="checkbox" id="materi3" name="materi3">
									<span class="lever"></span>
									Hadir
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s10 offset-s1 m4">
					<div class="card grey lighten-4">
						<div class="card-content grey-text text-darken-3 center">
							<span class="card-title"><strong>Materi 4:</strong></span>
							<div class="switch">
								<label class="grey-text text-darken-3">
									Tidak Hadir
									<input type="checkbox" id="materi4" name="materi4">
									<span class="lever"></span>
									Hadir
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row center" style="margin-top: 50px;">
				<a href="{{ URL::previous() }}" class="btn waves-effect waves-light red darken-2">Kembali</a>
				<button type="submit" class="btn waves-effect waves-light">Update</button>
			</div>
		</form>
	</div>
@endsection