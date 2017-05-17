@extends('layouts.pemandu')

@section('title', 'Rilis Kuesioner')

@section('title-page', 'Rilis Kuesioner')

@section('content')
	<div class="row center">
		<div class="col s8 offset-s2">
			@foreach($materis as $materi)
			<h5>{{ $materi->materi_nama }}</h5>
				<form method="post" action="/pemandu/buat/riliskuesioner/{{ $materi->materi_id }}">
					<div class="row">
						<div class="switch col s8 offset-s2">
							@foreach($kuesioners as $kuesioner)
								@if($kuesioner->kuesioner_status != 0)
									<h1>
										<a class="btn btn-floating btn-large pulse"><i class="material-icons">hourglass_empty</i></a>
										<h6>Sedang rilis...</h6>
									</h1>
									<div class="col s8 offset-s2" style="margin-top: 30px;">
										<a href="{{ url('/pemandu/buat/daftarkuesioner') }}" class="modal-action modal-close waves-effect waves-red btn red">Kembali</a>
										<button type="submit" class="btn waves-effect waves-light">Selesai!</button>
									</div>
									{{ csrf_field() }}
						<input type="hidden" name="_method" value="PUT">
					</div>
				</form>
								@else
									<h1>
										<label>
											Off
											<input type="checkbox" name="rilis">
											<span class="lever"></span>
											On
										</label>
									</h1>
									</div>
						<div class="col s8 offset-s2" style="margin-top: 30px;">
							<a href="{{ url('/pemandu/buat/daftarkuesioner') }}" class="modal-action modal-close waves-effect waves-red btn red">Kembali</a>
							<button type="submit" class="btn waves-effect waves-light">Rilis!</button>
						</div>
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="PUT">
					</div>
				</form>
								@endif
							@endforeach
			@endforeach
		</div>
	</div>
@endsection