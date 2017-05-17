@extends('layouts.pemandu')

@section('title', 'Daftar Kuesioner')

@section('title-page', 'Daftar Kuesioner')

@section('content')
	<div class="col s8 offset-s2">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>Materi</th>
					<th>Status</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nourut=1; ?>
				@foreach($materis as $materi)
					<tr>
						<td>{{ $nourut }}</td>
						<td>{{ $materi->materi_nama }}</td>
						@if($materi->kuesioner_status == NULL)
							<td title="Belum Tersedia">0</td>
							<td>Belum Tersedia</td>
						@elseif($materi->kuesioner_status == 1)
							<td title="Selesai"><i class="material-icons teal-text">done</i></td>
							<td title="Selesai">Selesai</td>
						@elseif($materi->kuesioner_status == -1)
							<td title="Proses"><a href="/pemandu/buat/riliskuesioner/{{ $materi->materi_id }}"><i class="material-icons teal-text">hourglass_empty</i></a></td>
							<td title="Proses">Proses</td>
						@else
							<td>-</td>
							<td title="Rilis Kuesioner?"><a href="/pemandu/buat/riliskuesioner/{{ $materi->materi_id }}"><i class="material-icons teal-text">send</i></a></td>
						@endif
					</tr>
					<?php $nourut++; ?>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection