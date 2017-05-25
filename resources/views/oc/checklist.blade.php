@extends('layouts.oc')

@section('title', 'Halaman Checklist Peserta')

@section('title-page', 'Daftar Peserta')

@section('style')
	#toast-container {
		top: 20% !important;
		right: 15% !important;
	}
@endsection

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
				@php $nourut = 1; @endphp
				@foreach($pesertas as $peserta)
					<tr>
						<td>{{ $nourut }}</td>
						<td>{{ $peserta->peserta_nrp }}</td>
						<td>{{ $peserta->peserta_nama }}</td>
						<td>{{ $peserta->fk_peserta_kelas }} | {{ $peserta->kelas_nama }}</td>
						<td>
							@if($peserta->ceklis_waktu != null)
								{{ $peserta->ceklis_waktu }}
							@else
								Belum ceklis kelengkapan
							@endif
						</td>
						<td>
							@if($peserta->ceklis_waktu != null)
								<i class="material-icons blue-text text-blue-1">done</i>
							@else
								<a href="/oc/checklist/{{ $peserta->peserta_nrp }}" class="btn waves-effect waves-light">Cek!</a>
							@endif
						</td>
					</tr>
					@php $nourut++; @endphp
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

@section('script')
	@if (session('sukses'))
		Materialize.toast('{{ session('sukses') }}', 4000);
	@endif
@endsection