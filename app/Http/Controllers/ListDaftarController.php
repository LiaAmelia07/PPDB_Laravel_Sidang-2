<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Jurusan;


class ListDaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('admin.pendaftaran.index', compact('pendaftaran'));
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
        $jurusan = Jurusan::all();
        $pendaftaran = Pendaftaran::findOrfail($id);
        return view('admin.pendaftaran.show', compact('pendaftaran', 'jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::all();
        $pendaftaran = Pendaftaran::findOrfail($id);
        return view('admin.pendaftaran.edit', compact('jurusan','pendaftaran'));
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
            'foto'=>'image|mimes:jpg,png,jpeg'
        ]);
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->nama_lengkap = $request->nama_lengkap;
        $pendaftaran->jurusan_id = $request->jurusan_id;
        $pendaftaran->nis = $request->nis;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tgl_lahir = $request->tgl_lahir;
        $pendaftaran->no_hp = $request->no_hp;
        $pendaftaran->email = $request->email;
        $pendaftaran->provinsi = $request->provinsi;
        $pendaftaran->kabupaten = $request->kabupaten;
        $pendaftaran->kelurahan = $request->kelurahan;
        $pendaftaran->kecamatan = $request->kecamatan;
        $pendaftaran->alamat = $request->alamat;
        if ($request->hasFile('foto')) {
            $pendaftaran->deleteImage();
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/book/', $name);
            $pendaftaran->foto = $name;
        }
        $pendaftaran->nama_ayah = $request->nama_ayah;
        $pendaftaran->pekerjaan_ayah = $request->pekerjaan_ayah;
        $pendaftaran->no_hp_ayah = $request->no_hp_ayah;
        $pendaftaran->nama_ibu = $request->nama_ibu;
        $pendaftaran->pekerjaan_ibu = $request->pekerjaan_ibu;
        $pendaftaran->no_hp_ibu = $request->no_hp_ibu;
        $pendaftaran->asal_sekolah = $request->asal_sekolah;
        $pendaftaran->alamat_sekolah = $request->alamat_sekolah;
        $pendaftaran->save();
        return redirect('/ppdb/admin/pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->deleteImage();
        $pendaftaran->delete();
        return redirect('/ppdb/admin/pendaftaran');
    }
}
