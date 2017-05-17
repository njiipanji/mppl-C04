@extends('layouts.peserta')

@section('title', 'Menu PA/Kuesioner')

@section('title-page', 'Menu Isi PA/Kuesioner')

@section('content')
	{{-- list menu --}}
	<div class="row center" style="margin-top: 50px;">
		<div class="col s12">
			<a href="{{ url('peserta/isipa') }}" class="btn-large waves-effect waves-light">Isi PA Materi</a>
		</div>
	</div>
	<div class="row center">
		<div class="col s12">
			<a href="{{ url('peserta/kuesioner') }}" class="btn-large waves-effect waves-light">Isi Kuesioner</a>
		</div>
	</div>
@endsection