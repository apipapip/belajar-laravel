@extends('templates.layout')
@section('halaman_judul','halaman biodata')
@section('kontent')
    <h1>ini adalah halaman home</h1>
     <h3>selamat datang {{$nama}}, anda berada dikelas {{$kelas}}, tinggal di {{$alamat}}</h3>
     <h4>teman bang {{$nama}}</h4>
     <ol>
        @foreach($member as $mt)
        <li>{{$mt}}</li>
        @endforeach
     </ol>
@endsection