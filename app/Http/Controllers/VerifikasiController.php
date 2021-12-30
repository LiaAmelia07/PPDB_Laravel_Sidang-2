<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class VerifikasiController extends Controller
{
    public function index(){
        return view('admin.verifikasi.verifikasi');
    }
    public function verifikasi(Request $request){
        $request->validate([
            'nis'=>'required'
        ]);
        $nis = $request->nis;
        $cek = Pendaftaran::where('nis', $nis)->count();
        $cek2 = Pendaftaran::where('verifikasi')->count();
        if($cek > 0){
            Pendaftaran::where('nis', $nis)->update(['verifikasi'=>1]);
            $request->session()->flash('sukses', 'Verifikasi Berhasil!');
        }
        else{
            $request->session()->flash('gagal', 'Verifikasi Gagal! Nis Tidak Ditemukan!');
        }
        return redirect()->back();
    }
}
