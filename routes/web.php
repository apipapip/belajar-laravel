<?php

use App\Http\Controllers\belajar_controller;
use App\Http\Controllers\lokalcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/home', function (){
    $member=array('apisuki','anggastore','rejomok','aliqadal','apip raja garam','andicka');
    return view('home', [
        "nama"=>"Ajay",
        "kelas"=>"XI RPL",
        "alamat"=>"Opak",
        "member"=>$member ,
        "menu"=>"member" 
    ]);
})->name('member');

Route::get('/try', [belajar_controller::class,'index'])->name('latihan');

Route::get('/biodata',[belajar_controller::class, 'biodata'])->name('biodata');

Route::get('/sbadmin',function (){
    return view('index',[
        "menu"=>"dashboard",
    ]);
})->name('dashboard');

Route::get('/lokal',[lokalcontroller::class,'index'])->name('lokal.index');

Route::get('/lokal/tambah',[lokalcontroller::class,'create'])->name('lokal.create');

Route::post('/lokal',[lokalcontroller::class,'store'])->name('lokal.store');

