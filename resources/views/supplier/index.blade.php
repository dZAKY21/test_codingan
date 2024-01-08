@extends('layout.main')
@section('title', 'Supplier')

@section('content')
<div class="col-lg-6 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">


            <div class="row">
                <div class="card-body">

                    <div class="col-md-12">
                        <h4 class="card-title">Supplier</h4>
                        <p class="card-description">
                            Daftar Supplier yang ada di AmamyBakery

                        </p>

                        <div class="box box-warning">
                            <div class="box-header">
                                <a href="{{ url('supplier') }}">
                                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i
                                            class="fa fa-refresh"></i>
                                        Refresh</button>

                                    <a href="{{ route('supplier.create') }}"
                                        class="btn btn-sm btn-flat btn-primary">Tambah</a>
                                </a>

                            </div>
                            <div class="box-body">

                                <div class="table-responsive">


                                    <thead>
                                        <tr>
                                            <table class="table align-items-center mb-0">
                                                <th>Nama Supplier</th>
                                                <th>Barang</th>
                                                <th>alamat Supplier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="d-flex px-2 py-1">

                                            @foreach ($suppliers as $item)
                                            <tr>

                                                <td>Nama Supplier</td>
                                                <td>Barang</td>
                                                <td>alamat Supplier</td>
                                                <td>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('supplier.edit', $item->id) }}">
                                                <button class="btn btn-success  btn-xs mx-3">Edit</button>
                                            </a>
                                            <form method="POST" action="{{ route('supplier.destroy', $item->id) }}">
                                                @method('delete')
                                                @csrf

                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit"
                                                    class="btn btn-xs btn-danger btn-rounded show_confirm"
                                                    data-toggle="tooltip" title='Delete'
                                                    data-nama='{{ $item->nama }}'>Hapus</button>
                                            </form>
                                        </div>
                                        </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection