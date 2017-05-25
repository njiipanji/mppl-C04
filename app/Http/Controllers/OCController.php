<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ceklis;
use Carbon\Carbon;

class OCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('oc');
    }


    public function index()
    {
        return view('oc.halamandepan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checklist()
    {
        $pesertas = DB::select('SELECT p.peserta_nrp, p.peserta_nama,  p.fk_peserta_kelas, c.ceklis_waktu
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

    public function updatechecklist(Request $request)
    {
        // $ceklis_peserta = DB::select('SELECT c.*
        //                         FROM ceklis c
        //                         JOIN peserta p
        //                         ON c.fk_ceklis_peserta = p.peserta_id'
        //                         );
        // $ceklis_hari =  DB::select('SELECT c.*
        //                         FROM ceklis c
        //                         JOIN hari h
        //                         ON c.fk_ceklis_hari = h.hari'
        //                         );
        $ceklis = new Ceklis;
        $ceklis->ceklis_kemeja = $request->kemeja;
        $ceklis->ceklis_almamater = $request->almamater;
        $ceklis->ceklis_bawahan = $request->celrok;
        $ceklis->ceklis_dasi = $request->dasi;
        $ceklis->ceklis_ktm = $request->ktm;
        $ceklis->ceklis_waktu = Carbon::now();
        // $ceklis->fk_ceklis_peserta = $request-> $ceklis_peserta;
        // $ceklis->fk_ceklis_hari = $request-> $ceklis_hari;
        $ceklis->save();

        return redirect('/oc/checklist')->with('alert-success','Checklist berhasil ditambah.');
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
