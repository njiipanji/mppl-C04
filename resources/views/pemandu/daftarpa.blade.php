@extends('layouts.pemandu')

@section('title', 'Daftar PA')

@section('title-page', 'Daftar PA')

@section('content')
	<div class="col s8 offset-s2">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>Materi</th>
					<th>Indikator 1</th>
					<th>Indikator 2</th>
					<th>Indikator 3</th>
					<th>Indikator 4</th>
					<th>Indikator 5</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nourut=1; ?>
				@foreach($materis as $materi)
					<tr>
						<td>{{ $nourut }}</td>
						<td>{{ $materi->materi_nama }}</td>
						<td>
							@if($materi->pa_soal_1 != null)
								{{ $materi->pa_soal_1 }}
							@else
								-
							@endif
						</td>
						<td>
							@if($materi->pa_soal_2 != null)
								{{ $materi->pa_soal_2 }}
							@else
								-
							@endif
						</td>
						<td>
							@if($materi->pa_soal_3 != null)
								{{ $materi->pa_soal_3 }}
							@else
								-
							@endif
						</td>
						<td>
							@if($materi->pa_soal_4 != null)
								{{ $materi->pa_soal_4 }}
							@else
								-
							@endif
						</td>
						<td>
							@if($materi->pa_soal_5 != null)
								{{ $materi->pa_soal_5 }}
							@else
								-
							@endif
						</td>
						<td>
							@if($materi->pa_waktu != null)
								<a href="/pemandu/ubah/pa/{{ $materi->materi_id }}"><i class="material-icons teal-text" title="Ubah">mode_edit</i></a>
							@else
								<a href="/pemandu/buat/pa/{{ $materi->materi_id }}"><i class="material-icons teal-text" title="Tambah">add</i></a>
							@endif
						</td>
					</tr>
					<?php $nourut++; ?>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection