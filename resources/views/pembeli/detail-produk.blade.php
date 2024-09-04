@extends('template.side-bar-customer')
@section('content')
   <div class="container d-flex justify-content-center mt-5">
        <div class="row shadow mt-5 p-4 w-100">
            <div class="col-12">
                <a href="/home" class=" text-decoration-none text-secondary"><i class="bi bi-arrow-left fs-2"></i></a>
            </div>
            <div class="col-5 d-flex justify-content-center">
                <img src="{{ asset('storage/foto/'.$produk->foto) }}" alt="" width="100%" height="400px" class=" shadow-sm rounded" style="object-fit: cover">
            </div>
            <div class="col-7 mt-2 mb-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class=" fw-bold " style="font-size: 2rem">{{ strtoupper($produk->produk) }}</h1>
                        <p class="">Categories : {{ strtoupper($produk->kategori) }}</p>
                    </div>
                    <div class="col-12">
                        <form action="" method="post"></form>
                    </div>
                    <div class="col-12 d-flex flex-column mb-5" style="height: 200px;">
                        <p>DESCRIPTION :</p>
                        <p style="margin-top: -20px;" class=" ms-2">{{ $produk->deskripsi }}</p>
                    </div>
                    {{-- <div class="col-12 mb-2">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-4 d-flex">
                                    <input type="number" name="jumlah" id="" class="border-secondary border-1 form-control w-25" value="1">
                                    <button type="submit" class=" btn btn-secondary"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h2>${{ $produk->harga }}</h2>
                            </div>
                            <div class="col-10">
                                <form action="/transaksi/{{ $produk->id }}" method="post" class=" me-1">
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-100 d-flex justify-content-center flex-wrap align-items-center"><i class="bi bi-bag"></i> BUY</button>
                                  </form>
                                  {{-- <a href="/transaksi/{{ $produk->id }}" class="btn btn-primary w-100 d-flex justify-content-center flex-wrap align-items-center" style="height: 50px"><i class="bi bi-bag"></i>&nbsp;BUY</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection