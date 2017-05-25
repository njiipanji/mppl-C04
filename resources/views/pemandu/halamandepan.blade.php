@extends('layouts.pemandu')

@section('title', 'Halaman Depan')

@section('title-page', 'Pengumuman')

@section('style')
	#toast-container {
		top: 35% !important;
		right: 20% !important;
	}
@endsection

@section('content')
	<div class="row center">
		<a class="btn waves-effect waves-light" href="#modaltambah">Tambah</a>
	</div>

	{{-- list pengumuman --}}
	<div class="col s12">
		<ul class="collapsible" data-collapsible="accordion">
			@foreach($pengumumans as $pengumuman)
				<li>
					<div class="collapsible-header">
						<span class="badge">
							<form method="POST" action="/pemandu/pengumuman/{{ $pengumuman->pengumuman_id }}" accept-charset="UTF-8">
								<input name="_method" type="hidden" value="DELETE">
								{{ csrf_field() }}
								<a class="btn green" style="height: 20px; line-height: 10px; padding: 0 1rem;" href="/pemandu/pengumuman/{{ $pengumuman->pengumuman_id }}"><i class="material-icons" title="Ubah pengumuman" style=" width: 1rem; font-size: 1rem; line-height: 1.5rem; margin-right: 0px;">mode_edit</i></a>
								<input type="submit" class="btn red" onclick="return confirm('Anda yakin akan menghapus data?');" value="x" title="Hapus pengumuman" style="height: 20px; line-height: 10px; padding: 0 1.2rem; font-weight: bold;">
							</form>
						</span>{{ $pengumuman->pengumuman_waktu }} | {{ $pengumuman->pengumuman_judul }}</div>
					<div class="collapsible-body"><span>{!! $pengumuman->pengumuman_konten !!}</span></div>
				</li>
			@endforeach
		</ul>
	</div>

	{{-- modal --}}
	<div id="modaltambah" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div class="row center">
				<h4>Tambah Pengumuman<h4>				
			</div>
			<form class="col s12" action="/pemandu" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">bookmark</i>
						<input id="judul_pengumuman" type="text" name="judul_pengumuman" required>
						<label for="judul_pengumuman">Judul Pengumuman</label>
					</div>
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">book</i>
						<textarea id="textarea_isi" class="materialize-textarea" name="textarea_isi" required></textarea>
						<label for="textarea_isi">Isi Pengumuman</label>
					</div>
				</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
			<button class="modal-action waves-effect waves-teal btn-flat" type="submit">Tambah</button>
			</form>
		</div>
	</div>
@endsection

@section('script')
	$('.modal').modal();
	$('.collapsible').collapsible();
	$('#textarea_isi').trigger('autoresize');
	@if(Session::has('alert-success'))
		Materialize.toast('{{ Session::get('alert-success') }}', 4000);
            
	@endif
	@if(Session::has('alert-success-delete'))
        Materialize.toast('{{ Session::get('alert-success-delete') }}', 4000);
	@endif
	@if(Session::has('alert-success-update'))
        Materialize.toast('{{ Session::get('alert-success-update') }}', 4000);
	@endif
@endsection