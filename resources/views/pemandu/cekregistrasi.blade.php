@extends('layouts.pemandu')

@section('title', 'Registrasi Materi')

@section('title-page', 'Registrasi Materi')

@section('content')
	{{-- list pendaftar --}}
	<div class="col s12">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th width="100px">Materi 1</th>
					<th width="100px">Materi 2</th>
					<th width="100px">Materi 3</th>
					<th width="100px">Materi 4</th>
					<th width="100px">Materi 5</th>
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
					<td>1</td>
				</tr>
				<tr>
					<td>2</td>
					<td>511x100xxx</td>
					<td>Adinda P.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
				<tr>
					<td>3</td>
					<td>511x100xxx</td>
					<td>Ananda Q.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>1</td>
				</tr>
				<tr>
					<td>4</td>
					<td>511x100xxx</td>
					<td>Bagus N.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection