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
		<form>
			<div class="row">
				<div class="input-field col s12 col m8 offset-m2">
					<select id="materi" name="materi" required>
						<option value="" disabled selected>Pilih materi</option>
						<option value="1">Materi 1</option>
						<option value="2">Materi 2</option>
						<option value="3">Materi 3</option>
						<option value="4">Materi 4</option>
					</select>
					<label for="nama_pemateri">Materi</label>
				</div>

				{{-- Untuk Fasilitator --}}
				<div class="col s12 col m8 offset-m2 center" style="margin-top: 25px;">
					<h5><strong>Untuk Fasilitator</strong></h5>
					<h6>1 = Tidak Baik, 2 = Cukup, 3 = Baik, 4 = Sangat Baik</h6>
				</div>
				<div class="input-field col s12 col m8 offset-m2" style="margin-top: 25px;">
					<input id="nama_fasilitator" name="nama_fasilitator" type="text" disabled value="Nama Fasilitator">
					<label for="nama_fasilitator">Nama Fasilitator</label>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="persiapan_fasilitator">Persiapan Fasilitator</label>	
					</div>
					<div class="col m8">
						<input name="persiapan_fasilitator" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="persiapan_fasilitator" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="persiapan_fasilitator" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="persiapan_fasilitator" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="pengalokasian_waktu">Pengalokasian Waktu</label>	
					</div>
					<div class="col m8">
						<input name="pengalokasian_waktu" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="pengalokasian_waktu" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="pengalokasian_waktu" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="pengalokasian_waktu" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="kesigapan_fasilitator">Kesigapan Fasilitator</label>	
					</div>
					<div class="col m8">
						<input name="kesigapan_fasilitator" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="kesigapan_fasilitator" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="kesigapan_fasilitator" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="kesigapan_fasilitator" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="pengondisian_peserta">Pengondisian Peserta</label>	
					</div>
					<div class="col m8">
						<input name="pengondisian_peserta" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="pengondisian_peserta" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="pengondisian_peserta" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="pengondisian_peserta" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="kerjasama_pemandu">Kerjasama dengan Pemandu</label>	
					</div>
					<div class="col m8">
						<input name="kerjasama_pemandu" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="kerjasama_pemandu" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="kerjasama_pemandu" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="kerjasama_pemandu" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="menyimpulkan_materi">Kemampuan Menyimpulkan Materi</label>	
					</div>
					<div class="col m8">
						<input name="menyimpulkan_materi" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="menyimpulkan_materi" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="menyimpulkan_materi" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="menyimpulkan_materi" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>

				{{-- Untuk Pemateri --}}
				<div class="col s12 col m8 offset-m2 center" style="margin-top: 50px;">
					<h5><strong>Untuk Pemateri</strong></h5>
					<h6>1 = Tidak Baik, 2 = Cukup, 3 = Baik, 4 = Sangat Baik</h6>
				</div>
				<div class="input-field col s12 col m8 offset-m2" style="margin-top: 25px;">
					<input id="nama_pemateri" name="nama_pemateri" type="text" disabled value="Nama Pemateri">
					<label for="nama_pemateri">Nama Pemateri</label>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="penguasaan_materi">Penguasaan Materi</label>	
					</div>
					<div class="col m8">
						<input name="penguasaan_materi" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="penguasaan_materi" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="penguasaan_materi" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="penguasaan_materi" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="cara_penyajian">Cara Penyajian</label>	
					</div>
					<div class="col m8">
						<input name="cara_penyajian" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="cara_penyajian" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="cara_penyajian" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="cara_penyajian" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="keruntutan_materi">Keruntutan Materi</label>	
					</div>
					<div class="col m8">
						<input name="keruntutan_materi" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="keruntutan_materi" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="keruntutan_materi" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="keruntutan_materi" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="materi_jelas">Materi yang Diberikan Jelas</label>	
					</div>
					<div class="col m8">
						<input name="materi_jelas" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="materi_jelas" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="materi_jelas" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="materi_jelas" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="materi_paham">Materi Mudah Dipahami</label>	
					</div>
					<div class="col m8">
						<input name="materi_paham" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="materi_paham" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="materi_paham" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="materi_paham" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="materi_berkorelasi">Materi Berkorelasi dengan Sebelumnya</label>	
					</div>
					<div class="col m8">
						<input name="materi_berkorelasi" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="materi_berkorelasi" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="materi_berkorelasi" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="materi_berkorelasi" type="radio" id="sb" value="4"/><label for="sb">4</label>
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
						<input name="ketertiban_peserta" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="ketertiban_peserta" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="ketertiban_peserta" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="ketertiban_peserta" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="antusiasme_peserta">Antusiasme Peserta</label>	
					</div>
					<div class="col m8">
						<input name="antusiasme_peserta" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="antusiasme_peserta" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="antusiasme_peserta" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="antusiasme_peserta" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="interaksi_pemandu">Interaksi dengan Pemandu</label>	
					</div>
					<div class="col m8">
						<input name="interaksi_pemandu" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="interaksi_pemandu" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="interaksi_pemandu" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="interaksi_pemandu" type="radio" id="sb" value="4"/><label for="sb">4</label>
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
						<input name="mengondisikan_ruangan" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="mengondisikan_ruangan" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="mengondisikan_ruangan" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="mengondisikan_ruangan" type="radio" id="sb" value="4"/><label for="sb">4</label>
					</div>
				</div>
				<div class="col s12 col m8 offset-m2" style="margin-top: 25px;">
					<div class="col m4">
						<label for="menyiapkan_perlengkapan">Menyiapkan Perlengkapan yang Dibutuhkan</label>	
					</div>
					<div class="col m8">
						<input name="menyiapkan_perlengkapan" type="radio" id="tb" value="1"/><label for="stb">1</label>
						<input name="menyiapkan_perlengkapan" type="radio" id="c" value="2"/><label for="tb">2</label>
						<input name="menyiapkan_perlengkapan" type="radio" id="b" value="3"/><label for="b">3</label>
						<input name="menyiapkan_perlengkapan" type="radio" id="sb" value="4"/><label for="sb">4</label>
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

@section('script')
	$('select').material_select();
	$('#kritik_saran').trigger('autoresize');
@endsection