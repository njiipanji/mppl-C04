<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengumuman;
use App\Models\Berkas;
use App\Models\Kelas;
use App\Models\Peserta;
use App\Models\Materi;
use App\Models\Kuesioner;
use App\Models\KuesionerJawab;
use App\Models\PA;
use App\Models\PAJawab;
use Carbon\Carbon;
use Auth;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('peserta');
    }

    public function index()
    {
        $pengumumans = Pengumuman::all();
        return view('peserta.halamandepan', compact('pengumumans'));
    }

    public function menudaftar()
    {
        $nrp = Auth::user()->nrp;
        $pesertas = DB::table('peserta')->where('peserta_nrp', '=', $nrp)->get();

        return view('peserta.halamandaftar', compact('pesertas'));
    }

    public function updatedaftar(Request $request)
    {
        $this->validate($request,[
            'nama'         => 'required',
            'motivasi'     => 'required',
            'check'        => 'required',
        ]);

        $nrp = Auth::user()->nrp;
        $pesertas = new Peserta;
        $pesertas->peserta_nrp      = $nrp;
        $pesertas->peserta_nama     = $request->nama;
        $pesertas->peserta_motivasi = $request->motivasi;
        $pesertas->peserta_status   = 1;
        $pesertas->fk_peserta_kelas = null;
        $pesertas->save();

        return redirect('/peserta/daftar')->with('alert-success','Kamu telah berhasil terdaftar.');
    }

    public function menuberkas()
    {
        $nrp = Auth::user()->nrp;
        $pesertas = DB::table('peserta')->where('peserta_nrp', '=', $nrp)->get();

        $berkass = DB::select('SELECT b.*, p.*
                                FROM berkas b
                                LEFT JOIN peserta p
                                ON p.peserta_id = b.fk_berkas_peserta');

        //dd($berkass);
        return view('peserta.halamanberkas', compact('pesertas', 'berkass'));
    }

    public function uploadberkas(Request $request)
    {
        $this->validate($request,[
            'berkas'  => 'required|mimes:zip|max:2500',
        ]);

        $nrp = Auth::user()->nrp;
        $peserta = Peserta::where('peserta_nrp', $nrp)->first();
        $berkas_nama = $nrp.'.'.$request->berkas->getClientOriginalExtension();
        $request->berkas->move(public_path('berkas/'.$nrp.'/'), $berkas_nama);

        $berkass                    = new Berkas;
        $berkass->berkas_link       = 'berkas/'.$nrp.'/'.$berkas_nama;
        $berkass->fk_berkas_peserta = $peserta->peserta_id;
        $berkass->save();

        return redirect('/peserta/berkas')->with('alert-success', 'Berkas telah berhasil diupload.');
    }

    public function reuploadberkas(Request $request)
    {
        $this->validate($request,[
            'berkas'  => 'required|mimes:zip|max:2500',
        ]);

        $nrp = Auth::user()->nrp;
        $peserta = Peserta::where('peserta_nrp', $nrp)->first();
        $berkas_nama = $nrp.'.'.$request->berkas->getClientOriginalExtension();
        $request->berkas->move(public_path('berkas/'.$nrp.'/'), $berkas_nama);

        $berkass                    = Berkas::where('fk_berkas_peserta',$peserta->peserta_id)->first();
        $berkass->berkas_link       = 'berkas/'.$nrp.'/'.$berkas_nama;
        $berkass->fk_berkas_peserta = $peserta->peserta_id;
        $berkass->save();

        return redirect('/peserta/berkas')->with('alert-success', 'Berkas telah berhasil diupload.');
    }

    public function menupakuesioner()
    {
        return view('peserta.menupakuesioner');
    }

    public function showpa()
    {
        $nrp = Auth::user()->nrp;
        $peserta = Peserta::where('peserta_nrp', $nrp)->first();
        $materis = Materi::where('fk_materi_kelas', $peserta->fk_peserta_kelas)->get();

        $jawabs = PAJawab::where('pa_jawab_id_peserta', '=', $peserta->peserta_id)->get();

        return view('peserta.pilihpa', compact('materis', 'jawabs'));
    }

    public function showformpa($id)
    {
        $materis = Materi::where('materi_id', $id)->get();
        $pas = PA::where('fk_pa_materi', $id)->get();
        
        return view('peserta.isipa', compact('materis', 'pas'));
    }

    public function isipa(Request $request, $id)
    {
        $nrp = Auth::user()->nrp;
        $peserta = Peserta::where('peserta_nrp', $nrp)->first();

        $pajawab = new PAJawab;
        $pajawab->pa_jawab_id_peserta = $peserta->peserta_id;
        $pajawab->fk_pa_jawab_pa = $id;
        $pajawab->pa_jawab_1 = $request->indikator1;
        if($request->indikator2 != null) {
            $pajawab->pa_jawab_2 = $request->indikator2;
        }
        if($request->indikator3 != null) {
            $pajawab->pa_jawab_3 = $request->indikator3;
        }
        if($request->indikator4 != null) {
            $pajawab->pa_jawab_4 = $request->indikator4;
        }
        if($request->indikator5 != null) {
            $pajawab->pa_jawab_5 = $request->indikator5;
        }
        $pajawab->save();

        return redirect('/peserta/pilihpa')->with('alert-success', 'PA telah berhasil disimpan.');
    }

    public function showformkuesioner()
    {
        $nrp = Auth::user()->nrp;
        $peserta = Peserta::where('peserta_nrp', $nrp)->first();
        $materis = Materi::where('fk_materi_kelas', $peserta->fk_peserta_kelas)->get();
        $kuesioners = Kuesioner::all();

        return view('peserta.formkuesioner', compact('materis', 'kuesioners'));
    }

    public function jawabkuesioner(Request $request)
    {
       // dd($request);
        $nrp = Auth::user()->nrp;
        $peserta = Peserta::where('peserta_nrp', $nrp)->first();

        $jawab = new KuesionerJawab;
        $jawab->kuesioner_jawab_id_peserta   = $peserta->peserta_id;
        $jawab->kuesioner_jawab_11           = $request->persiapan_fasilitator;
        $jawab->kuesioner_jawab_12           = $request->pengalokasian_waktu;
        $jawab->kuesioner_jawab_13           = $request->kesigapan_fasilitator;
        $jawab->kuesioner_jawab_14           = $request->pengondisian_peserta;
        $jawab->kuesioner_jawab_15           = $request->kerjasama_pemandu;
        $jawab->kuesioner_jawab_16           = $request->menyimpulkan_materi;
        $jawab->kuesioner_jawab_21           = $request->penguasaan_materi;
        $jawab->kuesioner_jawab_22           = $request->cara_penyajian;
        $jawab->kuesioner_jawab_23           = $request->keruntutan_materi;
        $jawab->kuesioner_jawab_24           = $request->materi_jelas;
        $jawab->kuesioner_jawab_25           = $request->materi_paham;
        $jawab->kuesioner_jawab_26           = $request->materi_berkorelasi;
        $jawab->kuesioner_jawab_kritik_saran = $request->kritik_saran;
        $jawab->kuesioner_jawab_31           = $request->ketertiban_peserta;
        $jawab->kuesioner_jawab_32           = $request->antusiasme_peserta;
        $jawab->kuesioner_jawab_33           = $request->interaksi_pemandu;
        $jawab->kuesioner_jawab_41           = $request->mengondisikan_ruangan;
        $jawab->kuesioner_jawab_42           = $request->menyiapkan_perlengkapan;
        $jawab->fk_kuesioner_jawab_kuesioner = $request->materi;
        $jawab->save();

        return redirect('/peserta/kuesioner')->with('alert-success', 'Kuesioner telah berhasil disimpan.');
    }
}
