@extends('layout.main')
@section('title', 'Supplier')

@section('content')


<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">

            <div class="row">
                <div class="card-body">
                    <h4 class="card-title">Supplier</h4>
                    <p class="card-description">
                        Formulir Supplier

                    </p>

                    <form class="forms-sample" method="POST" action="{{ route('supplier.store') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama Supplier</label>
                            <input type="text" class="form-control" name="nama_supplier" placeholder="Nama Supplier">
                            @error('nama_supplier')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Barang</label>
                            <input type="text" class="form-control" name="barang" placeholder="Barang">
                            @error('barang')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat Supplier</label>
                            <input type="text" class="form-control" name="alamat_supplier"
                                placeholder="Alamat Supplier">
                            @error('alamat_supplier')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('supplier') }}" class="btn btn-light">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection