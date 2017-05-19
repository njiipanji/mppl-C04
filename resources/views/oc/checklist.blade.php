@extends('layouts.oc')

@section('title', 'Halaman Checklist Peserta')

@section('title-page', 'Daftar Peserta')

@section('content')
	{{-- list pendaftar --}}
	<div class="col s12">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Waktu Registrasi</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$id = 1;
			?>
				@foreach($pesertas as $peserta)
					<tr>
						<td>{{ $id }}</td>
						<td>{{ $peserta->peserta_nrp }}</td>
						<td>{{ $peserta->peserta_nama }}</td>
						<td>{{ $peserta->fk_peserta_kelas }}</td>
						<td>{{ $peserta->ceklis_waktu }}</td>
						<td method="POST" action="/oc/checklist/{{ $peserta->peserta_nrp }}" accept-charset="UTF-8">
						{{ csrf_field() }}
						<a class="btn waves-effect waves-light" title="Checklist Peserta" style="height: 30px; line-height: 30px; padding: 0 1rem;" href="/oc/checklist/{{ $peserta->peserta_nrp }}">Cek!</i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection