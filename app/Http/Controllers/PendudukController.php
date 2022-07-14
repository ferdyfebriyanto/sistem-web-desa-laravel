<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.data-penduduk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        return view ('dashboard.data-penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:penduduks',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kab_kota' => 'required',
            'kode_pos' => 'required',
            'provinsi' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'kepala_keluarga' => 'required',
        ]);

        $penduduk = new Penduduk;
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->alamat = $request->alamat;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->kelurahan = $request->kelurahan;
        $penduduk->kecamatan = $request->kecamatan;
        $penduduk->kab_kota = $request->kab_kota;
        $penduduk->provinsi = $request->provinsi;
        $penduduk->agama = $request->agama;
        $penduduk->pendidikan = $request->pendidikan;
        $penduduk->status = $request->status;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->kewarganegaraan = $request->kewarganegaraan;
        $penduduk->kepala_keluarga = $request->kepala_keluarga;
        $penduduk->save();

        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Diubah');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        return view ('dashboard.data-penduduk.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view ('dashboard.data-penduduk.edit', compact('penduduk'));   
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
        $request->validate([
            'nik' => 'required|unique:penduduks',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kab_kota' => 'required',
            'provinsi' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'kepala_keluarga' => 'required',
        ]);

        $penduduk = Penduduk::find($id);
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->alamat = $request->alamat;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->kelurahan = $request->kelurahan;
        $penduduk->kecamatan = $request->kecamatan;
        $penduduk->kab_kota = $request->kab_kota;
        $penduduk->provinsi = $request->provinsi;
        $penduduk->agama = $request->agama;
        $penduduk->pendidikan = $request->pendidikan;
        $penduduk->status = $request->status;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->kewarganegaraan = $request->kewarganegaraan;
        $penduduk->kepala_keluarga = $request->kepala_keluarga;
        $penduduk->save();

        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Dihapus');
    }

    public function pdf()
    {
        $data = Penduduk::orderBy('nama')->get();
        $pdf = PDF::loadView('siswa.pdf', compact('data'));
        return $pdf->download('siswa.pdf');
    }


}
