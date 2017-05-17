@extends('layouts.pemandu')

@section('title', 'Buat PA')

@section('style')
	.input-field {
		margin-top: 0px;
	}
@endsection

@section('title-page', 'Buat PA (Performance Appraisal)')

@section('content')
	<div class="row center">
		<div class="col s8 offset-s2">
			<form action="/pemandu/buat/pa" method="POST">
				{{ csrf_field() }}
				@foreach($materis as $materi)
					<h5>{{ $materi->materi_nama }}</h5>
					<input type="hidden" name="materi_id" value="{{ $materi->materi_id }}">
				@endforeach
				<div class="row">
					<div class="input-field col s3 offset-s1" style="margin-top: 20px;">
						<label for="indikator">Isi Indikator:</label>
					</div>
					<div class="input-field col s7" style="margin-top: 20px;">
						<input id="indikator1" name="indikator1" type="text" required>
						<label for="indikator1">Indikator 1 (wajib diisi!)</label>
					</div>
					<div class="input-field col s7 offset-s4">
						<input id="indikator2" name="indikator2" type="text">
						<label for="indikator2">Indikator 2</label>
					</div>
					<div class="input-field col s7 offset-s4">
						<input id="indikator3" name="indikator3" type="text">
						<label for="indikator3">Indikator 3</label>
					</div>
					<div class="input-field col s7 offset-s4">
						<input id="indikator4" name="indikator4" type="text">
						<label for="indikator4">Indikator 4</label>
					</div>
					<div class="input-field col s7 offset-s4">
						<input id="indikator5" name="indikator5" type="text">
						<label for="indikator5">Indikator 5</label>
					</div>
				</div>
				<div class="row center">
					<a href="{{ URL::previous() }}" class="modal-action modal-close waves-effect waves-red btn red">Kembali</a>
					<button type="submit" class="btn waves-effect waves-light">Buat</button>
				</div>
			</form>
		</div>
	</div>
@endsection