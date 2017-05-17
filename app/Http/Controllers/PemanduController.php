<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengumuman;
use App\Models\Kelas;
use App\Models\Peserta;
use App\Models\Materi;
use App\Models\Kuesioner;
use App\Models\PA;
use App\Models\Ceklis;
use Carbon\Carbon;

class PemanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumans = Pengumuman::all();
        return view('pemandu.halamandepan', compact('pengumumans'));
    }

    public function tambahPengumuman(Request $request)
    {
        $this->validate($request,[
            'judul_pengumuman' => 'required',
            'textarea_isi'     => 'required',
        ]);

        $pengumuman = new Pengumuman;
        $pengumuman->pengumuman_judul = $request->judul_pengumuman;
        $pengumuman->pengumuman_waktu = Carbon::now();
        $pengumuman->pengumuman_konten = $request->textarea_isi;
        $pengumuman->save();

        return redirect('/pemandu')->with('alert-success','Pengumuman berhasil ditambah.');
    }

    public function liatPengumuman($id)
    {
        $pengumumans = Pengumuman::where('pengumuman_id', $id)->get();
        if (!$pengumumans) abort(404);

        return view('pemandu.editpengumuman', compact('pengumumans'));
    }

    public function updatePengumuman(Request $request, $id)
    {
        $this->validate($request,[
            'judul_pengumuman' => 'required',
            'textarea_isi'     => 'required',
        ]);

        $pengumuman = Pengumuman::find($id);
        $pengumuman->pengumuman_judul = $request->judul_pengumuman;
        $pengumuman->pengumuman_waktu = Carbon::now();
        $pengumuman->pengumuman_konten = $request->textarea_isi;
        $pengumuman->save();

        return redirect('/pemandu')->with('alert-success-update','Pengumuman berhasil diubah.');
    }

    public function hapusPengumuman($id)
    {
        $pengumumans = Pengumuman::find($id);
        if (!$pengumumans) abort(404);
        $pengumumans->delete();

        return redirect('/pemandu')->with('alert-success-delete','Pengumuman berhasil dihapus.');
    }

    public function menupeserta()
    {
        return view('pemandu.menupeserta');
    }

    public function showBerkas()
    {
        $pesertas = DB::select('SELECT p.*, b.*
                                FROM peserta p
                                LEFT JOIN berkas b
                                ON b.fk_berkas_peserta = p.peserta_id');
        //dd($pesertas);
        return view('pemandu.checklistpendaftar', compact('pesertas'));
    }

    public function verifikasiPeserta($id)
    {
        $pesertas = Peserta::where('peserta_id', $id)->first();

        $pesertas->peserta_status = 1;
        $pesertas->save();

        return redirect('/pemandu/peserta/checklist');
    }

    public function undoVerifikasi($id)
    {
        $pesertas = Peserta::where('peserta_id', $id)->first();

        $pesertas->peserta_status = 0;
        $pesertas->save();

        return redirect('/pemandu/peserta/checklist');
    }

    public function menubuat()
    {
        return view('pemandu.menubuat');
    }

    public function showKelas()
    {
        $kelass = Kelas::all();
        return view('pemandu.aturkelas', compact('kelass'));
    }

    public function tambahKelas(Request $request)
    {
        $this->validate($request,[
            'nama_kelas'  => 'required',
            'kuota_kelas' => 'required',
        ]);

        $kelas = new Kelas;
        $kelas->kelas_kuota = $request->kuota_kelas;
        $kelas->kelas_nama = $request->nama_kelas;
        $kelas->save();

        return redirect('/pemandu/peserta/bagikelas/aturkelas')->with('alert-success','Kelas berhasil ditambah.');
    }

    public function lihatKelas($id)
    {
        $kelass = Kelas::where('kelas_id', $id)->get();
        if (!$kelass) abort(404);

        return view('pemandu.ubahaturkelas', compact('kelass'));
    }

    public function updateKelas(Request $request, $id)
    {
        $this->validate($request,[
            'nama_kelas'  => 'required',
            'kuota_kelas' => 'required',
        ]);

        $kelas = Kelas::find($id);
        $kelas->kelas_kuota = $request->kuota_kelas;
        $kelas->kelas_nama = $request->nama_kelas;
        $kelas->save();

        return redirect('/pemandu/peserta/bagikelas/aturkelas')->with('alert-success','Kelas berhasil diubah.');
    }

    public function hapusKelas($id)
    {
        $kelass = Kelas::find($id);
        if (!$kelass) abort(404);
        $kelass->delete();

        return redirect('/pemandu/peserta/bagikelas/aturkelas')->with('alert-success-delete','Kelas berhasil dihapus.');
    }

    public function showBagiKelas()
    {
        //$pesertas = Peserta::all();
        $kelass = Kelas::all();
        $pesertas = DB::select('SELECT p.*, k.*
                                FROM peserta p
                                LEFT JOIN
                                kelas k
                                ON k.kelas_id = p.fk_peserta_kelas');
        //dd($pesertas);
        return view('pemandu.bagikelas', compact('pesertas', 'kelass'));
    }

    public function pilihBagiKelas(Request $request, $id)
    {
        //dd($request);
        $this->validate($request,[
            'kelas'  => 'required',
        ]);

        $pesertas = Peserta::find($id);
        $pesertas->fk_peserta_kelas = $request->kelas;
        $pesertas->save();

        return redirect('/pemandu/peserta/bagikelas/bagibagi');        
    }

    public function undoBagiKelas($id)
    {
        $pesertas = Peserta::find($id);
        $pesertas->fk_peserta_kelas = NULL;
        $pesertas->save();

        return redirect('/pemandu/peserta/bagikelas/bagibagi');
    }

    public function showKuesioner()
    {
        $materis = DB::select('SELECT m.*, k.*
                               FROM materi m
                               LEFT JOIN kuesioner k
                               ON k.fk_kuesioner_materi = m.materi_id');
       // dd($materis);
        return view('pemandu.daftarkuesioner', compact('materis'));
    }

    public function rilisKuesionerMateri($id)
    {
        $kuesioners = Kuesioner::where('fk_kuesioner_materi', $id)->get();
        //dd($kuesioners);
        $materis = Materi::where('materi_id', $id)->get();
        if (!$materis) abort(404);

        return view('pemandu.riliskuesioner', compact('materis', 'kuesioners'));
    }

    public function rilisKuesioner(Request $request, $id)
    {
        $kuesioners = Kuesioner::where('fk_kuesioner_materi', $id)->first();

        //dd($request);
        if($request->rilis == 'on' && $kuesioners->kuesioner_time == NULL) {
            $kuesioners->kuesioner_status = -1;
            $kuesioners->kuesioner_time = Carbon::now();
            $kuesioners->save();
        } else if($request->rilis == 'on' && $kuesioners->kuesioner_time != NULL) {
            return redirect('/pemandu/buat/daftarkuesioner');
        } else if($request->rilis != 'on' && $kuesioners->kuesioner_time != NULL) {
            $kuesioners->kuesioner_status = 1;
            $kuesioners->save();
        } else if($request->rilis != 'on' && $kuesioners->kuesioner_time == NULL) {
            return redirect('/pemandu/buat/daftarkuesioner');
        }

        return redirect('/pemandu/buat/daftarkuesioner');
    }

    public function showPA()
    {
        $materis = DB::select('SELECT m.*, p.*
                               FROM materi m
                               LEFT JOIN pa p
                               ON p.fk_pa_materi = m.materi_id');
        //dd($materis);
        return view('pemandu.daftarpa', compact('materis'));
    }

    public function formBuatPA($id)
    {
        $materis = Materi::where('materi_id', $id)->get();
        return view('pemandu.buatpa', compact('materis', 'pas'));
    }

    public function buatPA(Request $request)
    {
        $this->validate($request,[
            'indikator1'  => 'required',
        ]);

        $pas = new PA;
        $pas->pa_waktu = Carbon::now();
        $pas->pa_soal_1 = $request->indikator1;
        if($request->indikator2 != NULL) {
            $pas->pa_soal_2 = $request->indikator2;
        }
        if($request->indikator3 != NULL) {
            $pas->pa_soal_3 = $request->indikator3;
        }
        if($request->indikator4 != NULL) {
            $pas->pa_soal_4 = $request->indikator4;
        }
        if($request->indikator5 != NULL) {
            $pas->pa_soal_5 = $request->indikator5;
        }
        $pas->fk_pa_materi = $request->materi_id;
        $pas->save();

        return redirect('/pemandu/buat/daftarpa');
    }

    public function formUpdatePA($id)
    {
        $pas = PA::where('fk_pa_materi', $id)->get();
        $materis = Materi::where('materi_id', $id)->get();
        return view('pemandu.ubahpa', compact('materis', 'pas'));
    }

    public function updatePA(Request $request, $id)
    {
        $this->validate($request,[
            'indikator1'  => 'required',
        ]);

        $pas = PA::where('fk_pa_materi', $id)->first();
        $pas->pa_waktu = Carbon::now();
        $pas->pa_soal_1 = $request->indikator1;
        if($request->indikator2 != NULL) {
            $pas->pa_soal_2 = $request->indikator2;
        }
        if($request->indikator3 != NULL) {
            $pas->pa_soal_3 = $request->indikator3;
        }
        if($request->indikator4 != NULL) {
            $pas->pa_soal_4 = $request->indikator4;
        }
        if($request->indikator5 != NULL) {
            $pas->pa_soal_5 = $request->indikator5;
        }
        $pas->save();

        return redirect('/pemandu/buat/daftarpa');
    }

    public function showChecklistPeserta()
    {
        $pesertas = DB::select('SELECT DISTINCT p.*, a.*
                                FROM peserta p
                                LEFT JOIN (SELECT cl.*, hr.*
                                            FROM ceklis cl
                                            LEFT JOIN hari hr
                                            ON hr.hari_id = cl.fk_ceklis_hari) a
                                ON p.peserta_id = a.fk_ceklis_peserta
                                ORDER BY p.peserta_nrp ASC');
        //dd($pesertas);
        return view('pemandu.checklistregistrasi', compact('pesertas'));
    }

    public function menuoc()
    {
        return view('pemandu.menuoc');
    }
}