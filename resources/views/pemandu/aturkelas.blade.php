@extends('layouts.pemandu')

@section('title', 'Atur Kelas')

@section('title-page', 'Atur Kelas')

@section('content')
	<div class="row center">
		<a class="btn waves-effect waves-light" href="#tambahkelas">Tambah Kelas</a>
	</div>

	<div class="col s8 offset-s2">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>Kelas</th>
					<th>Nama Kelas</th>
					<th>Kuota</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nourut=1; ?>
				@foreach($kelass as $kelas)
					<tr>
						<td>{{ $nourut }}</td>
						<td>{{ $kelas->kelas_nama }}</td>
						<td>{{ $kelas->kelas_kuota }}</td>
						<td>
							<form method="POST" action="/pemandu/peserta/bagikelas/aturkelas/{{ $kelas->kelas_id }}" accept-charset="UTF-8">
								<input name="_method" type="hidden" value="DELETE">
								{{ csrf_field() }}
								<a class="btn green" style="height: 25px; font-weight: bold; padding: 0 1rem; margin-bottom: 5px;" href="/pemandu/peserta/bagikelas/aturkelas/{{ $kelas->kelas_id }}" title="Ubah"><i style="line-height: 5px;" class="material-icons white-text">mode_edit</i></a><input type="submit" class="btn red" onclick="return confirm('Anda yakin akan menghapus data?');" value="x" title="Hapus kelas" style="height: 25px; line-height: 5px; padding: 0 1.3rem; font-weight: bold; margin-bottom: 5px; margin-left: 10px;">
							</form>
						</td>
					</tr>
				<?php $nourut++; ?>
				@endforeach
			</tbody>
		</table>
	</div>

	{{-- modal --}}
	<div id="tambahkelas" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div class="row center">
				<h4>Tambah Kelas<h4>				
			</div>
			<form class="col s12" action="/pemandu/peserta/bagikelas/aturkelas" method="POST">
				{{ csrf_field() }}
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">info</i>
						<input id="nama_kelas" type="text" name="nama_kelas">
						<label for="nama_kelas">Nama Kelas</label>
					</div>
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">event_seat</i>
						<input id="kuota_kelas" type="number" name="kuota_kelas">
						<label for="kuota_kelas">Kuota Kelas</label>
					</div>
				</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
			<button type="submit" class="modal-action waves-effect waves-teal btn-flat">Tambah</button>
			</form>
		</div>
	</div>
@endsection

@section('script')
	$('.modal').modal();
@endsection