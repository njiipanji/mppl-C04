@extends('layouts.pemandu')

@section('title', 'Menu Peserta')

@section('title-page', 'Menu Peserta')

@section('content')
	{{-- list menu --}}
	<div class="row center" style="margin-top: 50px;">
		<div class="col s12">
			<a href="{{ url('pemandu/peserta/checklist') }}" class="btn-large waves-effect waves-light">Daftar Peserta</a>
		</div>
	</div>
	<div class="row center">
		<div class="col s12">
			<a href="{{ url('pemandu/peserta/berkas') }}" class="btn-large waves-effect waves-light">Berkas Peserta</a>			
		</div>
	</div>
	<div class="row center">
		<div class="col s12">
			<a href="{{ url('pemandu/peserta/bagikelas') }}" class="btn-large waves-effect waves-light">Bagi Kelas</a>			
		</div>
	</div>
@endsection