<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\MatakuliahController;
use \App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index (){
        return view('matakuliah',[
            "matakuliah" => Matakuliah::all()
        ]);
    }
    //
    public function simpan(Request $request){
       // dd($request->all());
       \App\Models\Matakuliah::create([
           "kodemk" =>$request->kodemk,
           "matakuliah" =>$request->matakuliah,
           "dosen" =>$request->dosen,
           "noruang" =>$request->noruang
       ]);
       return redirect()->route('matakuliah.index');
    }

    public function hapus($id){
    Matakuliah::destroy($id);
    return redirect()->route('matakuliah.index');

    }
    public function tampil($id){
        //cari datanya
        $matakuliah = Matakuliah::find($id);
        //kirim datanya ke view
        return view('matakuliah',[
            "matakuliah" => Matakuliah::all(),           
            "data" => $matakuliah
        ]);
    }

    public function update(Request $request,$id){
        
        $matakuliah = Matakuliah::find($id);

        $matakuliah->kodemk = $request->kodemk;
        $matakuliah->matakuliah = $request->matakuliah;
        $matakuliah->dosen = $request->dosen;
        $matakuliah->noruang = $request->noruang;
        $matakuliah->save();

        return redirect()->route('matakuliah.index');
}
}
