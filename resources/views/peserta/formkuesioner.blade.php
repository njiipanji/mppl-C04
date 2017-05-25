@extends('layouts.peserta')

@section('title', 'Halaman Isi Kuesioner')

@section('title-page', 'Isi Kuesioner')

@section('style')
	.input-field {
		margin-top: 0px;
	}
@endsection

@section('content')
	<div class="col s8 offset-s2" style="margin-top: 50px;">
		<form action="/peserta/kuesioner" method="post">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s12 col m8 offset-m2">
					<select id="materi" name="materi" required>
						<option value="" disabled selected>Pilih materi</option>
						@foreach($materis as $materi)
							@foreach($kuesioners as $kuesioner)
								@if(($materi->materi_id == $kuesioner->fk_kuesioner_materi) && ($kuesioner->kuesioner_status==-1))
									<option value="{{ $materi->materi_id }}">{{ $materi->materi_nama }}</option>
								@endif
							@endforeach
						@endforeach
					</select>
					<label for="materi">Materi</label>
				</div>

				{{-- Untuk Fasilitator --}}
				<div class="col s12 col m8 offset-m2 center" style="margin-top: 25px;">
					<h5><strong>Untuk Fasilitator</strong></h5>
					<h6>1 = Tidak Baik, 2 = Cukup, 3 = Baik, 4 = Sangat Baik</h6>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="persiapan_fasilitator">Persiapan Fasilitator</label>	
					</div>
					<div class="col m8">
						<input name="persiapan_fasilitator" type="radio" id="tb_persiapan_fasilitator" value="1"/><label for="tb_persiapan_fasilitator">1</label>
						<input name="persiapan_fasilitator" type="radio" id="c_persiapan_fasilitator" value="2"/><label for="c_persiapan_fasilitator">2</label>
						<input name="persiapan_fasilitator" type="radio" id="b_persiapan_fasilitator" value="3"/><label for="b_persiapan_fasilitator">3</label>
						<input name="persiapan_fasilitator" type="radio" id="sb_persiapan_fasilitator" value="4"/><label for="sb_persiapan_fasilitator">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="pengalokasian_waktu">Pengalokasian Waktu</label>	
					</div>
					<div class="col m8">
						<input name="pengalokasian_waktu" type="radio" id="tb_pengalokasian_waktu" value="1"/><label for="tb_pengalokasian_waktu">1</label>
						<input name="pengalokasian_waktu" type="radio" id="c_pengalokasian_waktu" value="2"/><label for="c_pengalokasian_waktu">2</label>
						<input name="pengalokasian_waktu" type="radio" id="b_pengalokasian_waktu" value="3"/><label for="b_pengalokasian_waktu">3</label>
						<input name="pengalokasian_waktu" type="radio" id="sb_pengalokasian_waktu" value="4"/><label for="sb_pengalokasian_waktu">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="kesigapan_fasilitator">Kesigapan Fasilitator</label>	
					</div>
					<div class="col m8">
						<input name="kesigapan_fasilitator" type="radio" id="tb_kesigapan_fasilitator" value="1"/><label for="tb_kesigapan_fasilitator">1</label>
						<input name="kesigapan_fasilitator" type="radio" id="c_kesigapan_fasilitator" value="2"/><label for="c_kesigapan_fasilitator">2</label>
						<input name="kesigapan_fasilitator" type="radio" id="b_kesigapan_fasilitator" value="3"/><label for="b_kesigapan_fasilitator">3</label>
						<input name="kesigapan_fasilitator" type="radio" id="sb_kesigapan_fasilitator" value="4"/><label for="sb_kesigapan_fasilitator">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="pengondisian_peserta">Pengondisian Peserta</label>	
					</div>
					<div class="col m8">
						<input name="pengondisian_peserta" type="radio" id="tb_pengondisian_peserta" value="1"/><label for="tb_pengondisian_peserta">1</label>
						<input name="pengondisian_peserta" type="radio" id="c_pengondisian_peserta" value="2"/><label for="c_pengondisian_peserta">2</label>
						<input name="pengondisian_peserta" type="radio" id="b_pengondisian_peserta" value="3"/><label for="b_pengondisian_peserta">3</label>
						<input name="pengondisian_peserta" type="radio" id="sb_pengondisian_peserta" value="4"/><label for="sb_pengondisian_peserta">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="kerjasama_pemandu">Kerjasama dengan Pemandu</label>	
					</div>
					<div class="col m8">
						<input name="kerjasama_pemandu" type="radio" id="tb_kerjasama_pemandu" value="1"/><label for="tb_kerjasama_pemandu">1</label>
						<input name="kerjasama_pemandu" type="radio" id="c_kerjasama_pemandu" value="2"/><label for="c_kerjasama_pemandu">2</label>
						<input name="kerjasama_pemandu" type="radio" id="b_kerjasama_pemandu" value="3"/><label for="b_kerjasama_pemandu">3</label>
						<input name="kerjasama_pemandu" type="radio" id="sb_kerjasama_pemandu" value="4"/><label for="sb_kerjasama_pemandu">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="menyimpulkan_materi">Kemampuan Menyimpulkan Materi</label>	
					</div>
					<div class="col m8">
						<input name="menyimpulkan_materi" type="radio" id="tb_menyimpulkan_materi" value="1"/><label for="tb_menyimpulkan_materi">1</label>
						<input name="menyimpulkan_materi" type="radio" id="c_menyimpulkan_materi" value="2"/><label for="c_menyimpulkan_materi">2</label>
						<input name="menyimpulkan_materi" type="radio" id="b_menyimpulkan_materi" value="3"/><label for="b_menyimpulkan_materi">3</label>
						<input name="menyimpulkan_materi" type="radio" id="sb_menyimpulkan_materi" value="4"/><label for="sb_menyimpulkan_materi">4</label>
					</div>
				</div>

				{{-- Untuk Pemateri --}}
				<div class="col s12 col m8 offset-m2 center" style="margin-top: 50px;">
					<h5><strong>Untuk Pemateri</strong></h5>
					<h6>1 = Tidak Baik, 2 = Cukup, 3 = Baik, 4 = Sangat Baik</h6>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="penguasaan_materi">Penguasaan Materi</label>	
					</div>
					<div class="col m8">
						<input name="penguasaan_materi" type="radio" id="tb_penguasaan_materi" value="1"/><label for="tb_penguasaan_materi">1</label>
						<input name="penguasaan_materi" type="radio" id="c_penguasaan_materi" value="2"/><label for="c_penguasaan_materi">2</label>
						<input name="penguasaan_materi" type="radio" id="b_penguasaan_materi" value="3"/><label for="b_penguasaan_materi">3</label>
						<input name="penguasaan_materi" type="radio" id="sb_penguasaan_materi" value="4"/><label for="sb_penguasaan_materi">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="cara_penyajian">Cara Penyajian</label>	
					</div>
					<div class="col m8">
						<input name="cara_penyajian" type="radio" id="tb_cara_penyajian" value="1"/><label for="tb_cara_penyajian">1</label>
						<input name="cara_penyajian" type="radio" id="c_cara_penyajian" value="2"/><label for="c_cara_penyajian">2</label>
						<input name="cara_penyajian" type="radio" id="b_cara_penyajian" value="3"/><label for="b_cara_penyajian">3</label>
						<input name="cara_penyajian" type="radio" id="sb_cara_penyajian" value="4"/><label for="sb_cara_penyajian">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="keruntutan_materi">Keruntutan Materi</label>	
					</div>
					<div class="col m8">
						<input name="keruntutan_materi" type="radio" id="tb_keruntutan_materi" value="1"/><label for="tb_keruntutan_materi">1</label>
						<input name="keruntutan_materi" type="radio" id="c_keruntutan_materi" value="2"/><label for="c_keruntutan_materi">2</label>
						<input name="keruntutan_materi" type="radio" id="b_keruntutan_materi" value="3"/><label for="b_keruntutan_materi">3</label>
						<input name="keruntutan_materi" type="radio" id="sb_keruntutan_materi" value="4"/><label for="sb_keruntutan_materi">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="materi_jelas">Materi yang Diberikan Jelas</label>	
					</div>
					<div class="col m8">
						<input name="materi_jelas" type="radio" id="tb_materi_jelas" value="1"/><label for="tb_materi_jelas">1</label>
						<input name="materi_jelas" type="radio" id="c_materi_jelas" value="2"/><label for="c_materi_jelas">2</label>
						<input name="materi_jelas" type="radio" id="b_materi_jelas" value="3"/><label for="b_materi_jelas">3</label>
						<input name="materi_jelas" type="radio" id="sb_materi_jelas" value="4"/><label for="sb_materi_jelas">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="materi_paham">Materi Mudah Dipahami</label>	
					</div>
					<div class="col m8">
						<input name="materi_paham" type="radio" id="tb_materi_paham" value="1"/><label for="tb_materi_paham">1</label>
						<input name="materi_paham" type="radio" id="c_materi_paham" value="2"/><label for="c_materi_paham">2</label>
						<input name="materi_paham" type="radio" id="b_materi_paham" value="3"/><label for="b_materi_paham">3</label>
						<input name="materi_paham" type="radio" id="sb_materi_paham" value="4"/><label for="sb_materi_paham">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="materi_berkorelasi">Materi Berkorelasi dengan Sebelumnya</label>	
					</div>
					<div class="col m8">
						<input name="materi_berkorelasi" type="radio" id="tb_materi_berkorelasi" value="1"/><label for="tb_materi_berkorelasi">1</label>
						<input name="materi_berkorelasi" type="radio" id="c_materi_berkorelasi" value="2"/><label for="c_materi_berkorelasi">2</label>
						<input name="materi_berkorelasi" type="radio" id="b_materi_berkorelasi" value="3"/><label for="b_materi_berkorelasi">3</label>
						<input name="materi_berkorelasi" type="radio" id="sb_materi_berkorelasi" value="4"/><label for="sb_materi_berkorelasi">4</label>
					</div>
				</div>
				<div class="input-field col s12 col m8 offset-m2" style="margin-top: 25px;">
					<textarea id="kritik_saran" name="kritik_saran" class="materialize-textarea"></textarea>
					<label for="kritik_saran">Kritik / Saran untuk Pemandu</label>
				</div>

				{{-- Untuk Peserta --}}
				<div class="col s12 col m8 offset-m2 center" style="margin-top: 50px;">
					<h5><strong>Untuk Peserta</strong></h5>
					<h6>1 = Tidak Baik, 2 = Cukup, 3 = Baik, 4 = Sangat Baik</h6>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="ketertiban_peserta">Ketertiban Peserta</label>	
					</div>
					<div class="col m8">
						<input name="ketertiban_peserta" type="radio" id="tb_ketertiban_peserta" value="1"/><label for="tb_ketertiban_peserta">1</label>
						<input name="ketertiban_peserta" type="radio" id="c_ketertiban_peserta" value="2"/><label for="c_ketertiban_peserta">2</label>
						<input name="ketertiban_peserta" type="radio" id="b_ketertiban_peserta" value="3"/><label for="b_ketertiban_peserta">3</label>
						<input name="ketertiban_peserta" type="radio" id="sb_ketertiban_peserta" value="4"/><label for="sb_ketertiban_peserta">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="antusiasme_peserta">Antusiasme Peserta</label>	
					</div>
					<div class="col m8">
						<input name="antusiasme_peserta" type="radio" id="tb_antusiasme_peserta" value="1"/><label for="tb_antusiasme_peserta">1</label>
						<input name="antusiasme_peserta" type="radio" id="c_antusiasme_peserta" value="2"/><label for="c_antusiasme_peserta">2</label>
						<input name="antusiasme_peserta" type="radio" id="b_antusiasme_peserta" value="3"/><label for="b_antusiasme_peserta">3</label>
						<input name="antusiasme_peserta" type="radio" id="sb_antusiasme_peserta" value="4"/><label for="sb_antusiasme_peserta">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="interaksi_pemandu">Interaksi dengan Pemandu</label>	
					</div>
					<div class="col m8">
						<input name="interaksi_pemandu" type="radio" id="tb_interaksi_pemandu" value="1"/><label for="tb_interaksi_pemandu">1</label>
						<input name="interaksi_pemandu" type="radio" id="c_interaksi_pemandu" value="2"/><label for="c_interaksi_pemandu">2</label>
						<input name="interaksi_pemandu" type="radio" id="b_interaksi_pemandu" value="3"/><label for="b_interaksi_pemandu">3</label>
						<input name="interaksi_pemandu" type="radio" id="sb_interaksi_pemandu" value="4"/><label for="sb_interaksi_pemandu">4</label>
					</div>
				</div>

				{{-- Untuk OC --}}
				<div class="col s12 col m8 offset-m2 center" style="margin-top: 50px;">
					<h5><strong>Untuk OC</strong></h5>
					<h6>1 = Tidak Baik, 2 = Cukup, 3 = Baik, 4 = Sangat Baik</h6>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="mengondisikan_ruangan">Mengondisikan Ruangan dengan Kondusif</label>	
					</div>
					<div class="col m8">
						<input name="mengondisikan_ruangan" type="radio" id="tb_mengondisikan_ruangan" value="1"/><label for="tb_mengondisikan_ruangan">1</label>
						<input name="mengondisikan_ruangan" type="radio" id="c_mengondisikan_ruangan" value="2"/><label for="c_mengondisikan_ruangan">2</label>
						<input name="mengondisikan_ruangan" type="radio" id="b_mengondisikan_ruangan" value="3"/><label for="b_mengondisikan_ruangan">3</label>
						<input name="mengondisikan_ruangan" type="radio" id="sb_mengondisikan_ruangan" value="4"/><label for="sb_mengondisikan_ruangan">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="menyiapkan_perlengkapan">Menyiapkan Perlengkapan yang Dibutuhkan</label>	
					</div>
					<div class="col m8">
						<input name="menyiapkan_perlengkapan" type="radio" id="tb_menyiapkan_perlengkapan" value="1"/><label for="tb_menyiapkan_perlengkapan">1</label>
						<input name="menyiapkan_perlengkapan" type="radio" id="c_menyiapkan_perlengkapan" value="2"/><label for="c_menyiapkan_perlengkapan">2</label>
						<input name="menyiapkan_perlengkapan" type="radio" id="b_menyiapkan_perlengkapan" value="3"/><label for="b_menyiapkan_perlengkapan">3</label>
						<input name="menyiapkan_perlengkapan" type="radio" id="sb_menyiapkan_perlengkapan" value="4"/><label for="sb_menyiapkan_perlengkapan">4</label>
					</div>
				</div>
			</div>
			<div class="row center" style="margin-top: 50px;">
				<a href="{{ url('/peserta/pakuesioner') }}" class="btn waves-effect waves-light red darken-2">Batal</a>
				<button type="submit" class="btn waves-effect waves-light">Selesai</button>
			</div>
		</form>
	</div>
@endsection

@section('script')
	$('select').material_select();
	$('#kritik_saran').trigger('autoresize');
@endsection