@extends('layouts.pemandu')

@section('title', 'Pembagian Kelas')

@section('title-page', 'Pembagian Kelas')

@section('content')
	<div class="col s8 offset-s2">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th style="width: 20px;">Kelas</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nourut=1; ?>
				@foreach($pesertas as $peserta)
					<tr>
						<td>{{ $nourut }}</td>
						<td>{{ $peserta->peserta_nrp }}</td>
						<td>{{ $peserta->peserta_nama }}</td>
						@if($peserta->kelas_nama != null)
							<form action="/pemandu/peserta/bagikelas/bagibagi/undo/{{ $peserta->peserta_id }}" method="post">
								<td><div class="input-field" style="width: 80px; margin-top: 0px;"><select class="browser-default" disabled><option value="$peserta->kelas_id">{{ $peserta->kelas_nama }}</option></select></div></td>
								<td><button title="undo" type="submit" class="btn waves-effect waves-light red"><i class="material-icons white-text">undo</i></button></td>
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="PUT">
							</form>
						@else
							<form action="/pemandu/peserta/bagikelas/bagibagi/{{ $peserta->peserta_id }}" method="post">
								<td>
									<div class="input-field" style="width: 80px; margin-top: 0px;">
										<select name="kelas" class="browser-default">
											<option value="#" disabled selected>Pilih</option>
											@foreach($kelass as $kelas)
												<option value="{{ $kelas->kelas_id }}">{{ $kelas->kelas_nama }}</option>
											@endforeach
										</select>
									</div>
								</td>
								<td><button type="submit" title="Pilih" class="btn waves-effect waves-light">Ok</button></td>
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="PUT">
							</form>
						@endif
					</tr>
					<?php $nourut++; ?>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

@section('script')
	$('select').material_select();
	$('#kelas').val();
@endsection