<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\biodata;
use Illuminate\Http\Request;

class belajar_controller extends Controller
{
    public function index(){
        $tanggal=Carbon::now()->isoFormat
        ('dddd,D MMMM Y');
        return view('latihan',[
            "judul"=>"belajar laravel",
            "tanggal"=>$tanggal,
            'menu'=>'latihan'
        ]);
    }

    public function biodata(){
        $biodata=new biodata();
        return view('biodata',[
            'biodata'=> $biodata->biodata(),
            'menu'=>'biodata'
        ]); 
    }
}


