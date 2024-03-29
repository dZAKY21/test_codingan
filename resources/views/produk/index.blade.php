@extends('layout.main')
@section('title', 'Produk')

@section('content')


<div class="col-lg-8 col-md-4 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">

            <div class="row">
                <div class="card-body">
                    <div class="col-md-12">

                        <h4 class="card-title">Product</h4>
                        <p class="card-description">
                            Daftar Produk yang tersedia di AmamyBakery

                        </p>
                        <div class="box box-warning">
                            <div class="box-header">
                                <a href="{{ url('produk') }}">
                                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i
                                            class="fa fa-refresh"></i>
                                        Refresh</button>

                                    <a href="{{ route('produk.create') }}"
                                        class="btn btn-sm btn-flat btn-primary">Tambah</a>
                                </a>
                            </div>
                            <div class="box-body">

                                <div class="table-responsive">

                                    <thead>
                                        <tr>
                                            <table class="table align-items-center mb-0">
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="d-flex px-2 py-1">

                                            @foreach ($produks as $item)
                                            <tr>
                                                <td>{{ $item['nama_produk'] }}</td>
                                                <td>{{ $item['harga'] }}</td>
                                                <td>{{ $item['stok'] }}</td>
                                                <td>{{ $item['deskripsi'] }}</td>
                                                <td>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('produk.edit', $item->id) }}">
                                                <button class="btn btn-success  btn-xs mx-3">Edit</button>
                                            </a>
                                            <form method="POST" action="{{ route('produk.destroy', $item->id) }}">
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