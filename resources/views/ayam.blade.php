@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            .<div class="card-header-tab card-header-tab-animation card-header">
                <div class="card-title">
                    List Batch Ayam
                </div>
            </div>
            <div class="card-body">
                <div class="text-right">
                    <a href="/ayam/tambah" class="btn btn-primary">Tambah</a>
                </div>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Ayam</th>
                            <th>Jumlah Ayam Masuk</th>
                            <th>Sisa Ayam</th>
                            <th>Tanggal Masuk</th>
                            <th>Panen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ayam as $item)
                        <tr>
                            <td>{{$item->id_ayam}}</td>
                            <td>{{$item->jumlah_ayam_masuk}}</td>
                            <td>{{$item->sisa_ayam}}</td>
                            <td>{{$item->tanggal_masuk}}</td>
                            <td>{{$item->panen}}</td>
                            <td>
                                <a href="/ayam/edit/{{$item->id_ayam}}" class="btn btn-primary">Edit</a>
                                <a href="/ayam/hapus/{{$item->id_ayam}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection