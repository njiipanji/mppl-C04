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
				<tr>
					<td>1</td>
					<td>511x100xxx</td>
					<td>Aditya N.</td>
					<td>1</td>
					<td>-</td>
					<td><a href="/oc/checklist/511x100xxx" class="btn waves-effect waves-light">Cek!</a></td>
				</tr>
				<tr>
					<td>2</td>
					<td>511x100xxx</td>
					<td>Adinda P.</td>
					<td>1</td>
					<td>-</td>
					<td><a href="/oc/checklist/511x100xxx" class="btn waves-effect waves-light">Cek!</a></td>
				</tr>
				<tr>
					<td>3</td>
					<td>511x100xxx</td>
					<td>Ananda Q.</td>
					<td>2</td>
					<td>-</td>
					<td><a href="/oc/checklist/511x100xxx" class="btn waves-effect waves-light">Cek!</a></td>
				</tr>
				<tr>
					<td>4</td>
					<td>511x100xxx</td>
					<td>Bagus N.</td>
					<td>3</td>
					<td>-</td>
					<td><a href="/oc/checklist/511x100xxx" class="btn waves-effect waves-light">Cek!</a></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection