@extends('layout.main')
@section('title', 'Index')

@section('content')

<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">


            <div class="row">
                <div class="card-body">

                    <div class="col-md-12">
                        <h4 class="card-title">Customers</h4>
                        <p class="card-description">
                            Daftar Customers yang berbelanja di AmamyBakery

                        </p>
                        <div class="box box-warning">
                            <div class="box-header">
                                <a href="{{ url('customers') }}">
                                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i
                                            class="fa fa-refresh"></i>
                                        Refresh</button>

                                    <a href="{{ route('customers.create') }}"
                                        class="btn btn-sm btn-flat btn-primary">Tambah</a>
                                </a>

                            </div>
                            <div class="box-body">

                                <div class="table-responsive">


                                    <thead>
                                        <tr>
                                            <table class="table align-items-center mb-0">
                                                <th>Nama Customer</th>
                                                <th>Alamat</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="d-flex px-2 py-1">

                                            @foreach ($customers as $item)
                                            <tr>

                                                <td>{{ $item['nama_customer'] }}</td>
                                                <td>{{ $item['alamat'] }}</td>
                                                <td class="align-middle text-center">{{ $item['email'] }}</td>
                                                <td class="align-middle text-center"><img src="foto/{{ $item['foto'] }}"
                                                        class="rounded-circle" width="70px" />
                                                <td>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('customers.edit', $item->id) }}">
                                                <button class="btn btn-success  btn-xs mx-3">Edit</button>
                                            </a>
                                            <form method="POST" action="{{ route('customers.destroy', $item->id) }}">
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

    @section('scripts')
    <script>
        @if (Session:: get('success'))
        toastr.success("{{ Session::get('success') }}");
        @endif
    </script>

    <script type="text/javascript">
        $('.show_confirm').click(function (event) {
            var form = $(this).closest("form");
            var nama = $(this).data("nama");
            event.preventDefault();
            swal({
                title: `Apakah Anda yakin ingin menghapus data ${nama} ini?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
     );
    </script>

    </body>

    </html>