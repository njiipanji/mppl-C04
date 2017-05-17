@extends('layouts.peserta')

@section('title', 'Daftar PA')

@section('title-page', 'Daftar PA')

@section('content')
	<div class="col s8 offset-s2" style="margin-top: 50px;">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>Materi 1</th>
					<th>Materi 2</th>
					<th>Materi 3</th>
					<th>Materi 4</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><i class="material-icons" title="sudah diisi">done</i></td>
					<td><a href="{{ url('peserta/isipa/2') }}"><i class="material-icons teal-text">mode_edit</i></a></td>
					<td><a href="{{ url('peserta/isipa/3') }}"><i class="material-icons teal-text">mode_edit</i></a></td>
					<td><a href="{{ url('peserta/isipa/4') }}"><i class="material-icons teal-text">mode_edit</i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection