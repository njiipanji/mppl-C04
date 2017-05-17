@extends('layouts.pemandu')

@section('title', 'Ubah Pengaturan Kelas')

@section('title-page', 'Ubah Pengaturan Kelas')

@section('content')
	<div class="col s8 offset-s2">
		@foreach($kelass as $kelas)
			<form class="col s12" action="/pemandu/peserta/bagikelas/aturkelas/{{ $kelas->kelas_id }}" method="POST">
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">info</i>
						<input id="nama_kelas" type="text" name="nama_kelas" value="{{ $kelas->kelas_nama }}">
						<label for="nama_kelas">Nama Kelas</label>
					</div>
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">event_seat</i>
						<input id="kuota_kelas" type="number" name="kuota_kelas" value="{{ $kelas->kelas_kuota }}">
						<label for="kuota_kelas">Kuota Kelas</label>
					</div>
					<div class="col s8 offset-s2 center">
						<a href="{{ URL::previous() }}" class="modal-action modal-close waves-effect waves-red btn red">Batal</a>
						<button type="submit" class="modal-action waves-effect waves-teal btn">Ubah</button>
					</div>
				</div>
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
			</form>
		@endforeach
	</div>
@endsection