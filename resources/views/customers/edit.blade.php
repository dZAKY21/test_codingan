@extends('layout.main')
@section('title', 'Edit Customers')

@section('content')


<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">

            <div class="row">
                <div class="card-body">
                    <h4 class="card-title">Edit Customers</h4>
                    <p class="card-description">
                        Edit Formulir Customers

                    </p>

                    <form class="forms-sample" method="POST" action="{{ route('customers.update', $customers->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="nama">Nama Customers</label>
                            <input type="text" class="form-control" name="nama_customer" placeholder="Name Customers"
                                value="{{ $customers->nama_customer }}">
                            @error('nama_customer')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Customers"
                                value="{{ $customers->alamat }}">
                            @error('alamat')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email Customers"
                                value="{{ $customers->email }}">
                            @error('email')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto" placeholder="Foto Customers">
                            @error('foto')
                            <label class="text-danger">{{ $message }} </label>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('customers') }}" class="btn btn-light">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
