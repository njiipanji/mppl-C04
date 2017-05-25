@extends('layouts.peserta')

@section('title', 'Daftar PA')

@section('title-page', 'Daftar PA')

@section('content')
	<div class="col s12" style="margin-top: 50px;">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					@foreach($materis as $materi)
						<th>{{ $materi->materi_nama }}</th>
					@endforeach
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach($materis as $materi)
						@foreach($jawabs as $jawab)
							@if($materi->materi_id == $jawab->fk_pa_jawab_pa)
								<td title="Sudah diisi"><i class="material-icons teal-text">clear</i></td>
							@else
								<td title="Belum diisi"><a href="{{ url('peserta/isipa/'.$materi->materi_id) }}"><i class="material-icons teal-text">mode_edit</i></a></td>
							@endif
						@endforeach
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>
@endsection