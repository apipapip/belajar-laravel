<?php

namespace App\Http\Controllers;

use App\Models\lokal;
use Illuminate\Http\Request;

class lokalcontroller extends Controller
{
    //
    public function index(){
        $datakelas=lokal::all();
        return view('lokal.index',[
        "menu"=>"lokal",
    'data_kelas'=>$datakelas,
]);
    }
    //
    public function create(){
        return view('lokal.create',[
        "menu"=>"create"]);
    }
      public function store(Request $request){
        $validasi=$request->validate([
            'wali_kelas'=>'required',
            'nama_kelas'=>'required'
        ]);
        $data_baru=New lokal();
        $data_baru->wali_kelas=$validasi['wali_kelas'];
        $data_baru->nama_kelas=$validasi['nama_kelas'];
        $data_baru->save();

        return redirect(route('lokal.index'));
      }
}


