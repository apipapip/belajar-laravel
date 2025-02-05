@extends('templates.layout')
@section('halaman_judul','halaman biodata')
@section('kontent')
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<!-- <table border="1">
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>kelas</th>
        </tr>
        @foreach ($biodata as $b)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$b['nama']}}</td>
            <td>{{$b['kelas']}}</td>
        </tr>
            @endforeach
    </table>  -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Biodata</h6>
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
                @foreach ($biodata as $b)
                <tbody>
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$b['nama']}}</td>
                        <td>{{$b['kelas']}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- <script src="{{asset('dist/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('dist/js/demo/datatables-demo.js')}}"></script> -->
@endsection