@extends('layouts.peserta')

@section('title', 'Halaman Depan')

@section('title-page', 'Pengumuman')

@section('content')
	{{-- list pengumuman --}}
	<div class="col s12">
		<ul class="collapsible" data-collapsible="accordion">
			<li>
				<div class="collapsible-header">04-03-2017 15:00 | Pengumuman 1</div>
				<div class="collapsible-body"><span>Ini isi pengumuman 1.</span></div>
			</li>
			<li>
				<div class="collapsible-header">03-03-2017 18:00 | Pengumuman 2</div>
				<div class="collapsible-body"><span>Ini isi pengumuman 2.</span></div>
			</li>
			<li>
				<div class="collapsible-header">03-03-2017 18:00 | Pengumuman 3</div>
				<div class="collapsible-body"><span>Ini isi pengumuman 3.</span></div>
			</li>
		</ul>
	</div>
@endsection

@section('script')
	$('.collapsible').collapsible();
@endsection