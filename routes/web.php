<?php

use App\Http\Controllers\belajar_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    $member=array('apisuki','anggastore','rejomok','aliqadal','apip raja garam','andicka');
    return view('home', [
        "nama"=>"Ajay",
        "kelas"=>"XI RPL",
        "alamat"=>"Opak",
        "member"=>$member  
    ]);
});

Route::get('/try',
    [belajar_controller::class,
    'index']);

Route::get('/biodata',[belajar_controller::class,
            'biodata']);

Route::get('/sbadmin',function (){
    return view('index');
});