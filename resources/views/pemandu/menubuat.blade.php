@extends('layouts.pemandu')

@section('title', 'Menu Buat')

@section('title-page', 'Menu Buat')

@section('content')
	{{-- list menu --}}
	<div class="row center" style="margin-top: 50px;">
		<div class="col s12">
			<a href="{{ url('pemandu/buat/daftarkuesioner') }}" class="btn-large waves-effect waves-light">Rilis Kuesioner</a>
		</div>
	</div>
	<div class="row center">
		<div class="col s12">
			<a href="{{ url('pemandu/buat/daftarpa') }}" class="btn-large waves-effect waves-light">Buat PA</a>
		</div>
	</div>
@endsection