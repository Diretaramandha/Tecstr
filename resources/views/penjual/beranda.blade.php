@extends('template.side-bar-seller')
@section('content')
@include('sweetalert::alert')
    <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-3 ">
            <div class="">
                <h1>Dashbord</h1>
                <p class="d-flex"><a href="" class="nav-link">Home</a>/<a href="" class="nav-link">Dashbord</a></p>
            </div>
            <h4 class="text-success "><i class="fs-3 bi bi-currency-dollar me-1"></i>12334</h4>
        </div>
        <div class="row d-flex justify-content-center py-2">
            <div class="col-4 rounded bg-primary col-md-0 shadow py-4 px-4 w-25 me-5 mb-4 text-white ">
                <div class="mb-4">
                    <h4 class="fw-bold">Products</h4>
                </div>
                <div class="d-flex flex-warp align-items-center">
                    <div class="rounded-circle d-flex flex-warp shadow align-items-center justify-content-center me-4 bg-light" style="width: 70px;height: 70px;">
                        <i class="fs-5 bi bi-basket text-primary"></i>
                    </div>
                        <h1>{{ $jumlah }}</h1>
                </div>
            </div>
            <div class="col-4 rounded bg-secondary col-md-0 shadow py-4 px-4 w-25 me-5 mb-4 text-white ">
                <div class="mb-4">
                    <h4 class="fw-bold">Stock</h4>
                </div>
                <div class="d-flex flex-warp align-items-center">
                    <div class="rounded-circle d-flex flex-warp shadow align-items-center justify-content-center me-4 bg-light" style="width: 70px;height: 70px;">
                        <i class="fs-5 bi bi-box-seam text-secondary"></i>
                    </div>
                    <h1>{{ $produk->sum('stok') }}</h1>
                </div>
            </div>
            <div class="col-4 rounded bg-success col-md-0 shadow py-4 px-4 w-25 me-5 mb-4 text-white ">
                <div class="mb-4">
                    <h4 class="fw-bold">Sold</h4>
                </div>
                <div class="d-flex flex-warp align-items-center">
                    <div class="rounded-circle d-flex flex-warp shadow align-items-center justify-content-center me-4 bg-light" style="width: 70px;height: 70px;">
                        <i class="fs-5 bi bi-currency-dollar text-success"></i>
                    </div>
                    <h1>{{ $produk->sum('produk_terjual') }}</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid align-items-center p-5">
           
            <table class="table table-striped table-bordered" id="data_table">
                <thead class="table-">
                    <tr>
                        <th scope="col">Images</th>
                        <th scope="col">Name</th>
                        <th scope="col">categoris</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                    <tr>
                        <td class=" text-center"><img src="{{ asset('storage/foto/'.$item->foto) }}" alt="" style="width: 70px;height: 70px;"></td>
                        <td>{{ $item->produk }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->stok}}</td>
                        <td>{{ $item->produk_terjual}}</td>
                        <td>${{ $item->harga}}</td>
                        {{-- <td>
                            <a href="/edit/{{ $item->id }}" class="btn btn-warning fw-bold">Edit</a>
                            <a href="/hapus/{{ $item->id }}" class="btn btn-danger fw-bold">Hapus</a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection