@extends('layouts.pemandu')

@section('title', 'Menu OC')

@section('title-page', 'Menu OC')

@section('content')
	{{-- list menu --}}
	<div class="row center" style="margin-top: 50px;">
		<div class="col s12">
			<a href="{{ url('pemandu/oc/checklist') }}" class="btn-large waves-effect waves-light">Checklist Registrasi Peserta</a>
		</div>
	</div>
	<div class="row center">
		<div class="col s12">
			<a href="{{ url('pemandu/oc/registrasi') }}" class="btn-large waves-effect waves-light">Registrasi Peserta</a>
		</div>
	</div>
@endsection