<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// ================== PEMANDU ROUTING ================== //

// Routing show pengumuman
Route::get('/pemandu', 'PemanduController@index');
 // Tambah pengumuman
 Route::post('/pemandu', 'PemanduController@tambahPengumuman');

 // Ubah pengumuman
 Route::get('/pemandu/pengumuman/{id}', 'PemanduController@liatPengumuman');
 Route::put('/pemandu/pengumuman/{id}', 'PemanduController@updatePengumuman');

 // Hapus pengumuman
 Route::delete('/pemandu/pengumuman/{id}', 'PemanduController@hapusPengumuman');

// Routing menu peserta -> show aja
Route::get('/pemandu/peserta', 'PemanduController@menupeserta');

// Routing checklist peserta
 // Show
 Route::get('/pemandu/peserta/checklist', 'PemanduController@showBerkas');
 
 // Update -> verifikasi
 Route::put('/pemandu/peserta/checklist/verifikasi/{id}', 'PemanduController@verifikasiPeserta');

 // Update -> batal/undo verifikasi
 Route::put('/pemandu/peserta/checklist/undo/{id}', 'PemanduController@undoVerifikasi');

// Routing unduh berkas pendaftar
 // Show list pendaftar
// Route::get('/pemandu/peserta/berkas', function() {
//     return view('pemandu.unduhberkaspendaftar');
// });

// Routing menu bagi kelas
Route::get('/pemandu/peserta/bagikelas', function() {
    return view('pemandu.menubagikelas');
});

// Routing bagi kelas -> atur kelas (menambah, mengurangi kelas)
 // Show
 Route::get('/pemandu/peserta/bagikelas/aturkelas', 'PemanduController@showKelas');

 // Tambah
 Route::post('/pemandu/peserta/bagikelas/aturkelas', 'PemanduController@tambahKelas');

 // Update
 Route::get('/pemandu/peserta/bagikelas/aturkelas/{id}', 'PemanduController@lihatKelas');
 Route::put('/pemandu/peserta/bagikelas/aturkelas/{id}', 'PemanduController@updateKelas');

 // Delete
 Route::delete('/pemandu/peserta/bagikelas/aturkelas/{id}', 'PemanduController@hapusKelas');

// Routing bagi peserta ke kelas yang sudah terdaftar
 // Show
 Route::get('/pemandu/peserta/bagikelas/bagibagi', 'PemanduController@showBagiKelas');

 // Update
 Route::put('/pemandu/peserta/bagikelas/bagibagi/undo/{id}', 'PemanduController@undoBagiKelas');
 Route::put('/pemandu/peserta/bagikelas/bagibagi/{id}', 'PemanduController@pilihBagiKelas');

// Routing menu buat PA+Kuesioner
Route::get('/pemandu/buat', 'PemanduController@menubuat');

 // Show daftar kuesioner
 Route::get('/pemandu/buat/daftarkuesioner', 'PemanduController@showKuesioner');

 // Show kuesioner terpilih
 Route::get('/pemandu/buat/riliskuesioner/{id}', 'PemanduController@rilisKuesionerMateri');

 // Update kuesioner
 Route::put('/pemandu/buat/riliskuesioner/{id}', 'PemanduController@rilisKuesioner');

 // Show semua PA
 Route::get('/pemandu/buat/daftarpa', 'PemanduController@showPA');

 // Show PA materi
 Route::get('/pemandu/buat/pa/{id}', 'PemanduController@formBuatPA');

 // Insert pernyataan PA
 Route::post('/pemandu/buat/pa/', 'PemanduController@buatPA');

 // Update pernyataan PA
 Route::get('/pemandu/ubah/pa/{id}', 'PemanduController@formUpdatePA');
 Route::put('/pemandu/ubah/pa/{id}', 'PemanduController@updatePA');

// Routing menu oc
Route::get('/pemandu/oc', 'PemanduController@menuoc');

 // Show checklist peserta
 Route::get('/pemandu/oc/checklist', 'PemanduController@showChecklistPeserta');

 // Show registrasi materi
 Route::get('/pemandu/oc/registrasi', function() {
    return view('pemandu.cekregistrasi');
 });









// ================== OC ROUTING ================== //
// Routing halaman OC
Route::get('/oc', 'OCController@index');

// Routing checklist
 // Show daftar peserta
Route::get('/oc/checklist', 'OCController@checklist');

 // Show form checklist menurut nrp
Route::get('/oc/checklist/{nrp}', 'OCController@showformchecklist');

 //Update checklist


// Routing registrasi
 // Show daftar peserta
Route::get('/oc/registrasi', 'OCController@registrasi');

 // Show form registrasi menurut nrp
Route::get('/oc/registrasi/{nrp}', 'OCController@showformregistrasi');

 // Update presensi


// ================== PESERTA ================== //
// Routing halaman depan peserta
 // Show pengumuman
Route::get('/peserta', 'PesertaController@index');

// Routing menu daftar peserta
 // Show form / informasi sudah terdaftar
Route::get('/peserta/daftar', 'PesertaController@menudaftar');

 // Update data peserta -> terdaftar

// Routing menu berkas
 // Show form upload
Route::get('/peserta/berkas', 'PesertaController@menuberkas');

 // Upload file berkas

// Routing menu pa/kuesioner
 // Show menu pa kuesioner
Route::get('/peserta/pakuesioner', 'PesertaController@menupakuesioner');

 // Show menu pilih PA
Route::get('peserta/isipa', 'PesertaController@showpa');

 // Show form PA sesuai materi
Route::get('peserta/isipa/{materi}', 'PesertaController@showformpa');

 // Input PA sesuai materi

 // Show form isi kuesioner
Route::get('peserta/kuesioner', 'PesertaController@showformkuesioner');

 // Input kuesioner