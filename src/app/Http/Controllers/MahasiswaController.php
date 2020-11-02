<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\MahasiswaController;
use \App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index (){
        return view('mahasiswa',[
            "mahasiswa" => Mahasiswa::all()
        ]);
    }
    //
    public function simpan(Request $request){
       // dd($request->all());
       \App\Models\Mahasiswa::create([
           "nim" =>$request->nim,
           "nama" =>$request->nama,
           "alamat" =>$request->alamat,
           "telepon" =>$request->telepon
       ]);
       return redirect()->route('mahasiswa.index');
    }

    public function hapus($id){
    Matakuliah::destroy($id);
    return redirect()->route('mahasiswa.index');

    }
    public function tampil($id){
        //cari datanya
        $mahasiswa = Mahasiswa::find($id);
        //kirim datanya ke view
        return view('mahasiswa',[
            "mahasiswa" => Mahasiswa::all(),           
            "data" => $mahasiswa
        ]);
    }

    public function update(Request $request,$id){
        
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->telepon = $request->telepon;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index');
}
}
