@extends('layout.main')
@section('title', 'produk')

@section('content')


<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">

            <div class="row">
                <div class="card-body">
                    <h4 class="card-title">Product</h4>
                    <p class="card-description">
                        Formulir Edit Product

                    </p>

                    <form class="forms-sample" method="POST" action="{{ route('produk.update', $produks->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk"
                                value="{{ $produks->nama_produk }}">
                            @error('nama_produk')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Harga</label>
                            <input type="text" class="form-control" name="harga" placeholder="Harga"
                                value="{{ $produks->harga }}">
                            @error('harga')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Stok</label>
                            <input type="text" class="form-control" name="stok" placeholder="Stok"
                                value="{{ $produks->stok }}">
                            @error('stok')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                                value="{{ $produks->deskripsi }}">
                            @error('deskripsi')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('produk') }}" class="btn btn-light">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection