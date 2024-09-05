@extends('template.side-bar-seller')
@section('content')
@include('sweetalert::alert')
<div class="container-fluid d-flex flex-wrap align-items-center justify-content-between border-bottom ">
    <div class="">
        <h1>Product</h1>
        <p class="d-flex"><a href="" class="nav-link">Product</a></p>
    </div>
    <h4 class="text-success"><i class="fs-3 bi bi-currency-dollar me-1"></i>12334</h4>
</div>
<div class="container-fluid align-items-center p-5">
    <div class="d-flex justify-content-end flex-wrap align-items-center">
        <a href="/product/create" class="btn btn-secondary mb-4 "><i class="fs-5 bi bi-plus-lg"></i></a>
    </div>
    <table class="table table-striped table-bordered " id="data_table">
        <thead class="table-">
            <tr>
               <th scope="col">Images</th>
                <th scope="col">Product</th>
                <th scope="col">categoris</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $item)     
                <tr>
                    <td class="text-center"><img src="{{ asset('storage/foto/'.$item->foto) }}" alt="" class=" border" style="width: 80px; height: 80px;"></td>
                    <td>{{ $item->produk }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td class="text-center">
                        <a href="/product/upgrade/{{ $item->id }}" class="btn btn-warning fw-bold me-2"><i class="bi bi-search"></i></a>
                        <a href="/product/delete/{{ $item->id }}" class="btn btn-danger fw-bold"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection