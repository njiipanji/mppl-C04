@extends('layouts.peserta')

@section('title', 'Halaman Isi PA')

@section('title-page', 'Isi PA Materi ' . $materi)

@section('style')
	.input-field {
		margin-top: 0px;
	}
@endsection

@section('content')
	<div class="col s10 offset-s1" style="margin-top: 50px;">
		<form>
			<div class="row">
				<div class="col s10 offset-s1 col m8 offset-m2">
					<div class="card grey lighten-4">
						<div class="card-content">
							<span class="card-title center"><strong>Indikator 1</strong></span>
							<p class="center-align">Pemahaman peserta terhadap ...</p>
							<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
								<div class="col s4 offset-s4 col m2 offset-m5">
									<input id="indikator1" name="indikator1" min="0" max="100" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s10 offset-s1 col m8 offset-m2">
					<div class="card grey lighten-4">
						<div class="card-content">
							<span class="card-title center"><strong>Indikator 2</strong></span>
							<p class="center-align">Pemahaman peserta terhadap ...</p>
							<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
								<div class="col s4 offset-s4 col m2 offset-m5">
									<input id="indikator2" name="indikator2" min="0" max="100" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s10 offset-s1 col m8 offset-m2">
					<div class="card grey lighten-4">
						<div class="card-content">
							<span class="card-title center"><strong>Indikator 3</strong></span>
							<p class="center-align">Pemahaman peserta terhadap ...</p>
							<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
								<div class="col s4 offset-s4 col m2 offset-m5">
									<input id="indikator3" name="indikator3" min="0" max="100" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s10 offset-s1 col m8 offset-m2">
					<div class="card grey lighten-4">
						<div class="card-content">
							<span class="card-title center"><strong>Indikator 4</strong></span>
							<p class="center-align">Pemahaman peserta terhadap ...</p>
							<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
								<div class="col s4 offset-s4 col m2 offset-m5">
									<input id="indikator4" name="indikator4" min="0" max="100" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s10 offset-s1 col m8 offset-m2">
					<div class="card grey lighten-4">
						<div class="card-content">
							<span class="card-title center"><strong>Indikator 5</strong></span>
							<p class="center-align">Pemahaman peserta terhadap ...</p>
							<div class="row input-field center" style="margin-top: 10px; margin-bottom: 0px;">
								<div class="col s4 offset-s4 col m2 offset-m5">
									<input id="indikator5" name="indikator5" min="0" max="100" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row center" style="margin-top: 50px;">
				<a href="{{ url('/peserta/isipa') }}" class="btn waves-effect waves-light red darken-2">Batal</a>
				<button type="submit" class="btn waves-effect waves-light">Selesai</button>
			</div>
		</form>
	</div>
@endsection