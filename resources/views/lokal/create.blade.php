@extends('templates.layout')
@section('halaman_judul','data kelas')
@section('kontent')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                tambah data kelas
            </div>
            <div class="card-body">
                <form action="{{route('lokal.store')}}" method="post">
                    @csrf
                    <div class="col mt-2">
                        <label for="wali_kelas" class="text-gray-400">Wali Kelas</label>
                        <input type="text" name="wali_kelas" id="wali_kelas" class="form-control">
                    </div>
                    <div class="col mt-2">
                        <label for="nama_kelas" class="text-gray-400">Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="nama_kelas" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-md btn-primary float-right mt-4" >Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection