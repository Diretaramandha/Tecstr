@extends('template.side-bar-customer')
@section('content')
@include('sweetalert::alert')
    <div class="container mb-5 mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <a href="/home" class=" text-decoration-none text-secondary"><i class="bi bi-arrow-left fs-2"></i></a>
            </div>
            <div class="col-md-8 p-4 shadow rounded">
                <h3 class=" text-center">Transaction History</h3>
                <table class="table mt-4">
                    <tr class="text-center">
                        <th>NO</th>
                        <th>User Name</th>
                        <th>Product Name</th>
                        <th>tanggal Pemesanan</th>
                    </tr>
                    @foreach ($transaksi as $key => $item)
                    <tr class="text-center">
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->produk->produk }}</td>
                        <td>{{ $item->tgl_pemesanan }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection