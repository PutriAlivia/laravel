@extends('toserba.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Barang
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>ID_barang: </b>{{ $toserba_alivia->id_barang }}</li>
                        <li class="list-group-item"><b>Kode_barang: </b>{{ $toserba_alivia->kode_barang }}</li>
                        <li class="list-group-item"><b>nama_barang: </b>{{ $toserba_alivia->nama_barang }}</li>
                        <li class="list-group-item"><b>Kategori: </b>{{ $toserba_alivia->Kategori }}</li>
                        <li class="list-group-item"><b>Harga: </b>{{ $toserba_alivia->Harga }}</li>
                        <li class="list-group-item"><b>Jumlah: </b>{{ $toserba_alivia->Jumlah }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('toserba_alivia.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
