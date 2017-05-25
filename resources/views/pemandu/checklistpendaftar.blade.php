@extends('layouts.pemandu')

@section('title', 'Checklist Pendaftar')

@section('title-page', 'Checklist Pendaftar')

@section('content')
	{{-- list pendaftar --}}
	<div class="col s12">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th>Berkas</th>
					<th>Status Peserta</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nourut = 1; ?>
				@foreach($pesertas as $peserta)
					<tr>
						<td>{{ $nourut }}</td>
						<td>{{ $peserta->peserta_nrp }}</td>
						<td>{{ $peserta->peserta_nama }}</td>
						@if($peserta->berkas_link == null)
							<td><i class="material-icons" title="Belum Upload">clear</i></td>
						@else
							<td><a href="{{ url('/'.$peserta->berkas_link) }}"><i class="material-icons" title="Download Berkas">get_app</i></a></td>
						@endif
						@if($peserta->peserta_status == 0)
							<td>Belum Diverifikasi</td>
							<form action="/pemandu/peserta/checklist/verifikasi/{{ $peserta->peserta_id }}" method="post">
								<td>
									<button type="submit" class="btn waves-effect" title="Verifikasi?"><i class="material-icons">thumb_up</i></button>
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="PUT">
								</td>
							</form>
						@else
							<td>Terverifikasi</td>
							<form action="/pemandu/peserta/checklist/undo/{{ $peserta->peserta_id }}" method="post">
								<td>
									<button type="submit" title="Batalkan Verifikasi?" class="btn waves-effect red"><i class="material-icons">undo</i></button>
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="PUT">
								</td>
							</form>
						@endif
					</tr>
				<?php $nourut++; ?>
				@endforeach
			</tbody>
		</table>
	</div>
	{{-- <div class="col s12 center" style="margin-top: 50px;">
		<h6>Unduh berkas pendaftar, <a href="{{ url('pemandu/peserta/berkas') }}"><strong>disini</strong></a></h6>
	</div> --}}
@endsection