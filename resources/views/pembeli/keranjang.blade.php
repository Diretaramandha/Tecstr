@extends('template.side-bar-customer')
@section('content')
    <div class="container mb-5 mt-5">
        <div class="row shadow">
            <div class=" d-flex justify-content-between mt-4">
                <h3 class="fw-bold ms-2 fs-2">My Basket</h3>
                <a href="/home" class=" text-decoration-none btn btn-secondary "><i class="bi bi-arrow-left-square fs-4"></i></a>
            </div>
            <div class="col-md-8 p-4">
                @foreach ($keranjang as $item)
                    <div class="row shadow py-4 mb-4 rounded px-3">
                        <div class="col-4">
                            <img src="{{ asset('storage/foto/'.$item->produk->foto) }}" alt="" srcset="" width="100%" height="160px" class=" shadow-sm rounded">
                        </div>
                        <div class="col-4">
                            <h4>{{ $item->produk->produk }}</h4>
                            <p>Categories :{{ $item->produk->kategori }}</p>
                            <div class="d-flex">
                                <p class=" me-3">Price : ${{ $item->produk->harga }}</p>
                                <p>Stock : {{ $item->produk->stok }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex">
                                <a href="/home/basket/hapus/{{ $item->id }}" class="btn btn-danger me-2"><i class="bi bi-trash"></i></a>
                                <form action="/home/keranjang/jumlah/{{ $item->id }}" method="post" class="d-flex">
                                    @csrf
                                    <input type="number" name="jumlah" id="" value="{{ $item->jumlah }}" class=" form-control me-1" style="width: 30%">
                                    <input type="submit" value="add" class="btn btn-primary">
                                    {{-- <a href="/keranjang/hapus/{{ $item->id }}" class="btn btn-danger me-2"><i class="bi bi-trash"></i></a> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4 p-4">
                <div class="shadow rounded  py-4 px-4" style="">
                    <h4 class=" fw-bold">Order summary</h4>
                    <div class="row mt-2 border-bottom border-secondary">
                        <div class="col-6">
                            @foreach($keranjang as $key => $item)
                                <p>{{ $key+1 }}. {{ $item->produk->produk }} (x{{ $item->jumlah }})</p>
                            @endforeach
                        </div>
                        <div class="col-6 text-end">
                            @foreach($keranjang as $item)
                                <p>${{ $item->produk->harga * $item->jumlah }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">
                            <p>Estimated Total  </p>
                        </div>
                        <div class="col-6 text-end">
                            <p>${{ $keranjang->sum(function($item) { return $item->produk->harga * $item->jumlah; }) }}</p>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <form action="" method="post">
                            <input type="submit" value="Checkout" class="btn btn-danger w-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection