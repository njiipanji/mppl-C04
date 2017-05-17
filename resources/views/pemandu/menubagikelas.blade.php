@extends('layouts.pemandu')

@section('title', 'Menu Bagi Kelas')

@section('title-page', 'Menu Bagi Kelas')

@section('content')
	{{-- list menu --}}
	<div class="row center" style="margin-top: 50px;">
		<div class="col s12">
			<a href="{{ url('pemandu/peserta/bagikelas/aturkelas') }}" class="btn-large waves-effect waves-light">Atur Kelas</a>
		</div>
	</div>
	<div class="row center">
		<div class="col s12">
			<a href="{{ url('pemandu/peserta/bagikelas/bagibagi') }}" class="btn-large waves-effect waves-light {{-- disabled --}}" {{-- title="Atur jumlah kelas terlebih dahulu!" --}}>Bagi Kelas</a>
		</div>
	</div>
@endsection