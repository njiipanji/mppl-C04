<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ceklis;
use App\Models\Hari;
use App\Models\Peserta;
use Carbon\Carbon;
use Auth;

class OCController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('oc');
    }


    public function index()
    {
        return view('oc.halamandepan');
    }

    public function checklist()
    {
        $pesertas = DB::select('SELECT p.peserta_nrp, p.peserta_nama, p.fk_peserta_kelas, k.kelas_nama, c.ceklis_waktu
                                FROM peserta p
                                LEFT JOIN kelas k
                                ON k.kelas_id = p.fk_peserta_kelas
                                LEFT JOIN ceklis c
                                ON c.fk_ceklis_peserta = p.peserta_id');
        //dd($pesertas);
        return view('oc.checklist', compact('pesertas'));
    }

    public function showformchecklist($nrp)
    {
        return view('oc.formchecklist', compact('nrp'));
    }

    public function inputchecklist(Request $request)
    {
        $peserta_nrp = Peserta::where('peserta_nrp', $request->nrp)->first();
        //$waktu_registrasi = date('Y/m/d', strtotime($request->waktu_registrasi));

        $timestamp = strtotime($request->waktu_registrasi);
        $haris = date("d", $timestamp);
        $queryhari = DB::select('select h.hari_id
                                    from hari h
                                    where day(h.hari) = '.$haris);

        $harikegiatan = $queryhari['0']->hari_id;
    
        $ceklis = new Ceklis;
        if($request->kemeja == 'on') {
            $ceklis->ceklis_kemeja = 1;
        } else {
            $ceklis->ceklis_kemeja = 0;
        }

        if($request->almamater == 'on') {
            $ceklis->ceklis_almamater = 1;
        } else {
            $ceklis->ceklis_almamater = 0;
        }

        if($request->celrok == 'on') {
            $ceklis->ceklis_bawahan = 1;
        } else {
            $ceklis->ceklis_bawahan = 0;
        }

        if($request->dasi == 'on') {
            $ceklis->ceklis_dasi = 1;
        } else {
            $ceklis->ceklis_dasi = 0;
        }

        if($request->ktm == 'on') {
            $ceklis->ceklis_ktm = 1;
        } else {
            $ceklis->ceklis_ktm = 0;
        }

        $ceklis->ceklis_waktu = $request->waktu_registrasi;
        $ceklis->fk_ceklis_peserta = $peserta_nrp->peserta_id;
        $ceklis->fk_ceklis_hari = $harikegiatan;
        $ceklis->save();

        return redirect('/oc/checklist')->with('sukses', 'Berhasil checklist');
    }

    public function registrasi()
    {
        return view('oc.registrasi');
    }

    public function showformregistrasi($nrp)
    {
        return view('oc.formregistrasi', compact('nrp'));
    }
}
