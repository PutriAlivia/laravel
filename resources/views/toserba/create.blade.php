@extends('toserba.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('toserba.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="id_barang">ID_barang</label>
                            <input type="text" name="id_barang" class="form-control" id="id_barang" aria-describedby="id_barang">
                        </div>
                        <div class="form-group">
                            <label for="kode_barang">Kode_barang</label>
                            <input type="kode_barang" name="kode_barang" class="form-control" id="kode_barang" aria-describedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">nama_barang</label>
                            <input type="nama_barang" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="Kategori">Kategori</label>
                            <input type="Kategori" name="Kategori" class="form-control" id="Kategori" aria-describedby="Kategori">
                        </div>
                        <div class="form-group">
                            <label for="Harga">Harga</label>
                            <input type="Harga" name="Harga" class="form-control" id="Harga"
                                aria-describedby="Harga">
                        </div>
                        <div class="form-group">
                            <label for="Jumlah">Jumlah</label>
                            <input type="Jumlah" name="Jumlah" class="form-control" id="Jumlah" aria-describedby="Jumlah">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
