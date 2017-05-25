@extends('layouts.peserta')

@section('title', 'Halaman Depan')

@section('title-page', 'Pengumuman')

@section('content')
	{{-- list pengumuman --}}
	<div class="col s12">
		<ul class="collapsible" data-collapsible="accordion">
			@foreach($pengumumans as $pengumuman)
				<li>
					<div class="collapsible-header">{{ $pengumuman->pengumuman_waktu }} | {{ $pengumuman->pengumuman_judul }}</div>
					<div class="collapsible-body"><span>{!! $pengumuman->pengumuman_konten !!}</span></div>
				</li>
			@endforeach
		</ul>
	</div>
@endsection

@section('script')
	$('.collapsible').collapsible();
@endsection