@extends('templates.layout')
@section('halaman_judul','data kelas')
@section('kontent')
<a href="{{route('lokal.create')}}" class="btn btn-danger mb-3">Tambah Data</a>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-danger">Manajemen Data</h5>
            </div>
            <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama</th>
                        <th>kelas</th>
                    </tr>
                </thead>
                <tfoot>
                    <th>No</th>
                    <th>nama</th>
                    <th>kelas</th>
                </tfoot>
                @foreach ($data_kelas as $dk)
                <tbody>
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$dk['nama']}}</td>
                        <td>{{$dk['kelas']}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection