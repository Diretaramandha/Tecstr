@extends('template.side-bar-customer')
@section('content')
   <div class="container d-flex justify-content-center">
        <div class="row shadow mt-5 p-3 w-100">
            <div class="col-5 d-flex justify-content-center">
                <img src="{{ asset('storage/foto/'.$produk->foto) }}" alt="" width="100%" height="400px" class=" shadow-sm rounded" style="object-fit: cover">
            </div>
            <div class="col-5 mt-2 mb-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class=" fw-bold " style="font-size: 2rem">{{ strtoupper($produk->produk) }}</h1>
                        <p class="">Categories : {{ strtoupper($produk->kategori) }}</p>
                    </div>
                    <div class="col-12 d-flex flex-column">
                        <p>DESCRIPTION :</p>
                        <p style="margin-top: -20px;margin-bottom: 140px" class=" ms-2">{{ $produk->deskripsi }}</p>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h2>${{ $produk->harga }}</h2>
                            </div>
                            <div class="col-10">
                                <a href="" class="btn btn-primary w-100" ><i class="bi bi-bag"></i> BUY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection