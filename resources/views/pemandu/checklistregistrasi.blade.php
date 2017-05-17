@extends('layouts.pemandu')

@section('title', 'Checklist Registrasi')

@section('title-page', 'Checklist Registrasi Peserta')

@section('content')
	{{-- list pendaftar --}}
	<div class="col s12">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th width="100px">Kemeja</th>
					<th width="100px">Almamater</th>
					<th width="100px">Celana/Rok</th>
					<th width="100px">Dasi</th>
					<th width="100px">KTM</th>
					<th>Tanggal</th>
				</tr>
			</thead>
			<tbody>
				<?php $nourut=1; ?>
				@foreach($pesertas as $peserta)
					<tr>
						<td>{{ $nourut }}</td>
						<td>{{ $peserta->peserta_nrp }}</td>
						<td>{{ $peserta->peserta_nama }}</td>
						<td>
							@if($peserta->ceklis_kemeja != null)
								{{ $peserta->ceklis_kemeja }}
							@else
								-
							@endif
						</td>
						<td>
							@if($peserta->ceklis_almamater != null)
								{{ $peserta->ceklis_almamater }}
							@else
								-
							@endif
						</td>
						<td>
							@if($peserta->ceklis_bawahan != null)
								{{ $peserta->ceklis_bawahan }}
							@else
								-
							@endif
						</td>
						<td>
							@if($peserta->ceklis_dasi != null)
								{{ $peserta->ceklis_dasi }}
							@else
								-
							@endif
						</td>
						<td>
							@if($peserta->ceklis_ktm != null)
								{{ $peserta->ceklis_ktm }}
							@else
								-
							@endif
						</td>
						<td>
							@if($peserta->hari != null)
								{{ $peserta->hari }}
							@else
								-
							@endif
						</td>
					</tr>
					<?php $nourut++; ?>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection