@extends('layouts.oc')

@section('title', 'Halaman Registrasi Peserta')

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
					<th>Materi 1</th>
					<th>Materi 2</th>
					<th>Materi 3</th>
					<th>Materi 4</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>511x100xxx</td>
					<td>Aditya N.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td><a href="/oc/registrasi/511x100xxx" class="btn waves-effect waves-light">Cek!</a></td>
				</tr>
				<tr>
					<td>2</td>
					<td>511x100xxx</td>
					<td>Adinda P.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td><a href="/oc/registrasi/511x100xxx" class="btn waves-effect waves-light">Cek!</a></td>
				</tr>
				<tr>
					<td>3</td>
					<td>511x100xxx</td>
					<td>Ananda Q.</td>
					<td>2</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td><a href="/oc/registrasi/511x100xxx" class="btn waves-effect waves-light">Cek!</a></td>
				</tr>
				<tr>
					<td>4</td>
					<td>511x100xxx</td>
					<td>Bagus N.</td>
					<td>3</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td><a href="/oc/registrasi/511x100xxx" class="btn waves-effect waves-light">Cek!</a></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection