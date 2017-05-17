@extends('layouts.oc')

@section('title', 'Halaman Depan')

@section('title-page', 'Semangat OC')

@section('content')
	{{-- list menu --}}
	<div class="row center" style="margin-top: 50px;">
		<div class="col s12">
			<a href="{{ url('oc/checklist') }}" class="btn-large waves-effect waves-light">Input Checklist Peserta</a>
		</div>
	</div>
	<div class="row center">
		<div class="col s12">
			<a href="{{ url('oc/registrasi') }}" class="btn-large waves-effect waves-light">Input Registrasi Materi</a>
		</div>
	</div>
@endsection

@section('script')
	$('.modal').modal();
	$('.collapsible').collapsible();
	$('#textarea_isi').trigger('autoresize');
@endsection