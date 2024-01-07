@extends('layout.main')
@section('title', 'Kategori Produk')

@section('content')
<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">

            <div class="row">
                <div class="card-body">

                    <div class="col-md-12">
                        <h4 class="card-title">Categories Product</h4>
                        <p class="card-description">
                            List Kategori Produk yang ada di AmamyBakery

                        </p>

                        <div class="box box-warning">
                            <div class="box-header">
                                <a href="{{ url('kategori_produk') }}">
                                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i
                                            class="fa fa-refresh"></i>
                                        Refresh</button>
                                    <a href="{{ route('kategori_produk.create') }}"
                                        class="btn btn-sm btn-flat btn-primary">Tambah</a>
                                </a>

                            </div>
                            <div class="box-body">

                                <div class="table-responsive">

                                    <thead>
                                        <tr>
                                            <table class="table align-items-center mb-0">
                                                <th>Kategori Produk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="d-flex px-2 py-1">

                                            @foreach ($kategori_produks as $item)
                                            <tr>
                                                <td>{{ $item['nama_kategori'] }}</td>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('kategori_produk.edit', $item->id) }}">
                                                <button class="btn btn-success  btn-xs mx-3">Edit</button>
                                            </a>
                                            <form method="POST"
                                                action="{{ route('kategori_produk.destroy', $item->id) }}">
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
</div>
@endsection