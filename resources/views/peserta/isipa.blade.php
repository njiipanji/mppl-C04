@extends('layouts.peserta')

@section('title', 'Halaman Isi PA')

@section('title-page')
	@foreach($materis as $materi)
	Isi PA Materi {{ $materi->materi_nama }}
	@endforeach
@endsection

@section('style')
	.input-field {
		margin-top: 0px;
	}
@endsection

@section('content')
	<div class="col s10 offset-s1" style="margin-top: 50px;">
		@if($pas->isNotEmpty())
			@foreach($pas as $pa)
				<form action="/peserta/isipa/{{ $pa->pa_id }}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col s10 offset-s1 col m8 offset-m2">
							<div class="card grey lighten-4">
								<div class="card-content">
									<span class="card-title center"><strong>Indikator 1</strong></span>
									<p class="center-align">{{ $pa->pa_soal_1 }}</p>
									<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
										<div class="col s4 offset-s4 col m2 offset-m5">
											<input id="indikator1" name="indikator1" min="0" max="100" type="number" required>
										</div>
									</div>
								</div>
							</div>
						</div>

						@if($pa->pa_soal_2 != null)
							<div class="col s10 offset-s1 col m8 offset-m2">
								<div class="card grey lighten-4">
									<div class="card-content">
										<span class="card-title center"><strong>Indikator 2</strong></span>
										<p class="center-align">{{ $pa->pa_soal_2 }}</p>
										<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
											<div class="col s4 offset-s4 col m2 offset-m5">
												<input id="indikator2" name="indikator2" min="0" max="100" type="number" required>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endif

						@if($pa->pa_soal_3 != null)
							<div class="col s10 offset-s1 col m8 offset-m2">
								<div class="card grey lighten-4">
									<div class="card-content">
										<span class="card-title center"><strong>Indikator 3</strong></span>
										<p class="center-align">{{ $pa->pa_soal_3 }}</p>
										<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
											<div class="col s4 offset-s4 col m2 offset-m5">
												<input id="indikator3" name="indikator3" min="0" max="100" type="number" required>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endif

						@if($pa->pa_soal_4 != null)
							<div class="col s10 offset-s1 col m8 offset-m2">
								<div class="card grey lighten-4">
									<div class="card-content">
										<span class="card-title center"><strong>Indikator 4</strong></span>
										<p class="center-align">{{ $pa->pa_soal_4 }}</p>
										<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
											<div class="col s4 offset-s4 col m2 offset-m5">
												<input id="indikator4" name="indikator4" min="0" max="100" type="number" required>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endif

						@if($pa->pa_soal_5 != null)
							<div class="col s10 offset-s1 col m8 offset-m2">
								<div class="card grey lighten-4">
									<div class="card-content">
										<span class="card-title center"><strong>Indikator 5</strong></span>
										<p class="center-align">{{ $pa->pa_soal_5 }}</p>
										<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
											<div class="col s4 offset-s4 col m2 offset-m5">
												<input id="indikator5" name="indikator5" min="0" max="100" type="number" required>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endif
					</div>
					<div class="row center" style="margin-top: 50px;">
						<a href="{{ url('/peserta/pilihpa') }}" class="btn waves-effect waves-light red darken-2">Batal</a>
						<button type="submit" class="btn waves-effect waves-light">Selesai</button>
					</div>
				</form>
			@endforeach
		@else
			<div class="col s10 offset-s1 col m8 offset-m2 center">
				@foreach($materis as $materi)
					<h5>PA untuk materi <strong>{{ $materi->materi_nama }}</strong> belum tersedia. Mohon bersabar...</h5>
					<a href="{{ url('/peserta/pilihpa') }}" class="btn waves-effect waves-light red darken-2" style="margin-top: 25px;">Kembali</a>
				@endforeach
			</div>
		@endif
	</div>
@endsection