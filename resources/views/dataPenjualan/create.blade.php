@extends('layout.main')
@section('title', 'Data Penjualan')

@section('content')


<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">

            <div class="row">
                <div class="card-body">
                    <h4 class="card-title">Data Penjualan</h4>
                    <p class="card-description">
                        Formulir Data Penjualan

                    </p>

                    <form class="forms-sample" method="POST" action="{{ route('dataPenjualan.store') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                            @error('tanggal')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk">
                            @error('nama_produk')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Total Penjualan</label>
                            <input type="text" class="form-control" name="total_penjualan"
                                placeholder="Total Penjualan">
                            @error('total_penjualan')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Total Harga</label>
                            <input type="text" class="form-control" name="total_harga" placeholder="Total Penjualan">
                            @error('total_harga')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('dataPenjualan') }}" class="btn btn-light">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection