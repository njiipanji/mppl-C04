@extends('layouts.pemandu')

@section('title', 'Unduh Berkas Pendaftar')

@section('title-page', 'Berkas Pendaftar')

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
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>511x100xxx</td>
					<td>Aditya N.</td>
					<td>-</td>
				</tr>
				<tr>
					<td>2</td>
					<td>511x100xxx</td>
					<td>Adinda P.</td>
					<td><a href="#!"><i class="material-icons">get_app</i></a></td>
				</tr>
				<tr>
					<td>3</td>
					<td>511x100xxx</td>
					<td>Ananda Q.</td>
					<td>-</td>
				</tr>
				<tr>
					<td>4</td>
					<td>511x100xxx</td>
					<td>Bagus N.</td>
					<td><a href="#!"><i class="material-icons">get_app</i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col s12 center" style="margin-top: 50px;">
		<h6>Kembali ke <a href="{{ url('pemandu/peserta/checklist') }}"><strong>checklist peserta</strong></a></h6>
	</div>
@endsection