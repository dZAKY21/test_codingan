@extends('layout.main')
@section('title', 'Kategori Produk')

@section('content')


<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">

            <div class="row">
                <div class="card-body">
                    <h4 class="card-title">Edit Categories Product</h4>
                    <p class="card-description">
                        Formulir edit Categories

                    </p>

                    <form class="forms-sample" method="POST"
                        action="{{ route('kategori_produk.update', $kategori_produks->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="nama">Kategori Produk</label>
                            <input type="text" class="form-control" name="nama_kategori"
                                placeholder="Nama Kategori Produk" value="{{ $kategori_produks->nama_kategori }}">
                            @error('nama_kategori')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('kategori_produk') }}" class="btn btn-light">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection