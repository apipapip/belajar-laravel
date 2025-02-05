@extends('templates.layout')
@section('halaman_judul','halaman biodata')
@section('kontent')
    <h1>ini adalah halaman latihan laravel</h1>
    <h2>materi hari ini adalah {{$judul}}</h2>
    <h3>tanggal hari ini {{$tanggal}}</h3>
@endsection