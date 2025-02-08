<?php

namespace App\Http\Controllers;

use App\Models\lokal;
use App\Models\siswa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class siswacontroller extends Controller
{
    public function index():View{
        $data_siswa=siswa::all();
        return view('siswa.index',[
            "menu"=>"siswa",
            "title"=>"Data siswa",
            "data_siswa"=>$data_siswa
        ]);
    }

    public function create():View{
        $kelas=lokal::all();
        return view ('siswa.create',[
            "menu"=>"siswa",
            "title"=>"Tambah Data Siswa",
            "kelas"=>$kelas
        ]);
    }

    public function store(Request $request):RedirectResponse{
        $validasi=$request->validate([
            "nama"=>"required",
            "nisn"=>"required",
            "jk"=>"required",
            "alamat"=>"required",
            "lokal_id"=>"required",
            "foto"=>"image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ],[
            'nama.required'=>'Nama Harus Diisi',
            'nisn.required'=>'NISN Harus Diisi',
            'jk.required'=>'Jenis Kelamin Harus Diisi',
            'alamat.required'=>'Alamat Harus Diisi',
            'local_id.required'=>'Kelas Harus Diisi',
            'foto.image'=>'File Harus Berupa Gambar',
            'foto.mimes'=>'Format File Harus jpg,png,jpeg,gif,svg',
            'foto.max'=>'Ukuran File Maksimal 2MB'
        ]);

        $simpan_foto=$request->file('foto')->store('foto_siswa');

        $siswa=new siswa;
        $siswa->nama=$validasi['nama'];
        $siswa->nisn=$validasi['nisn'];
        $siswa->jk=$validasi['jk'];
        $siswa->alamat=$validasi['alamat'];
        $siswa->lokal_id=$validasi['lokal_id'];
        $siswa->no_telp=$request->no_telp;
        $siswa->foto=$simpan_foto;
        $siswa->save();

        return redirect()->route('siswa.index');
    }

    public function show($id):view
    {
        $siswa=Siswa::find($id);
        return view('siswa.show',[
            'menu'=>'siswa',
            'title'=>'Detail Data Siswa',
            'siswa'=>$siswa
        ]);
    }
}