@extends('template.side-bar-customer')
@section('content')
@include('sweetalert::alert')
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-12">
                <a href="/home"><i class="bi bi-arrow-left text-secondary fs-1"></i></a>
            </div>
            <div class="col-6 shadow me-5 px-4 py-4 ps-5" >
                <h3 class="mb-5">Transaction Notes</h3>
                <h5>List Product :</h5>
                <ol class="border-bottom">
                    {{-- @foreach ($produk as $item) --}}
                    <div class="d-flex justify-content-between w-75" style="">
                        <li>Product : {{ $produk->produk->produk}} (x{{$produk->total_produk }}) </li>
                        <p>${{ $produk->produk->harga * $produk->total_produk }}</p>
                    </div>
                    {{-- @endforeach --}}
                </ol>
                <div class="border-bottom">
                    <div class="d-flex justify-content-between w-75">
                        <h5>Total Products :</h5>
                        <p>${{ $produk->total_harga * $produk->total_produk }}</p>
                    </div>
                    <div class=" d-flex justify-content-between w-75">
                        <p>Customer name :</p>
                        <p>{{ $user->user->name }}</p>
                    </div>
                    <div class=" d-flex justify-content-between w-75">
                        <p>Order date :</p>
                        <p>{{ $produk->tgl_pemesanan }}</p>
                    </div>
                    {{-- <div class=" d-flex justify-content-between w-75 ">
                        <p>Delivery fee :</p>
                        <p>$100</p>
                    </div> --}}
                </div>
                <div class=" d-flex justify-content-between w-75 mt-3">
                    <h5>Total of all costs  :</h5>
                    <p>${{ $produk->total_harga * $produk->total_produk }}</p>
                </div>
                <h5 class="ms-1 mb-3">change product quantity :</h5>
                <form action="/transaksi/menambah/produk/{{ $produk->id }}" method="post" class="">
                    @csrf
                    <div class=" border-bottom pb-3">
                        <div class=" d-flex justify-content-between w-75">
                            <p>2. Product :{{$produk->produk->produk}} (x{{ $produk->total_produk }})</p>
                            <input type="number" name="total_produk" id="" value="{{ $produk->total_produk }}" class=" w-25 text-center" style="height: 30px">
                        </div>
                        <button type="submit" class=" w-100 btn btn-primary mb-2 "><i class="bi bi-plus fs-6"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-4 shadow py-4 px-4" style=" height: 280px;">
                <form action="/transaksi/post/{{ $produk->id }}" method="post">
                    @csrf
                    <h3>Transactions</h3>
                    {{-- <h5 class="ms-1 mb-3">change product quantity :</h5> --}}
                    {{-- <form action="/transaksi/menambah/produk/{{ $produk->id }}" method="post" class=" ms-3">
                        @csrf
                        <div class=" border-bottom pb-3">
                            <div class=" d-flex justify-content-between w-75">
                                <p>2. Product :{{$produk->produk->produk}} (x{{ $produk->total_produk }})</p>
                                <input type="number" name="jumlah" id="" value="{{ $produk->total_produk }}" class=" w-25 text-center" style="height: 30px">
                            </div>
                            <button type="submit" class=" w-100 btn btn-primary mb-2 "><i class="bi bi-plus fs-6"></i></button>
                        </div>
                    </form> --}}
                    <div class="mt-3">
                        <label for=""><i class="bi bi-credit-card-fill"></i> Payment type :</label>
                        <select name="payment_type" id="payment_type" class=" form-select">
                            <option value="">Select payment type</option>
                            <option value="dana" {{ $produk->tipe_pembayaran == 'dana' ? 'selected' : '' }}>Dana</option>
                            <option value="gopay" {{ $produk->tipe_pembayaran == 'gopay' ? 'selected' : '' }}>Gopay</option>
                            <option value="bni" {{ $produk->tipe_pembayaran == 'bni' ? 'selected' : '' }}>BNI</option>
                            <option value="bca" {{ $produk->tipe_pembayaran == 'bca' ? 'selected' : '' }}>BCA</option>
                            <option value="mandiri" {{ $produk->tipe_pembayaran == 'mandiri' ? 'selected' : '' }}>Mandiri</option>
                        </select>
                    </div>
                    <h3 class="mt-3">${{ $produk->total_harga * $produk->total_produk  }}</h3>
                    <button type="submit" class=" btn btn-primary w-100"><i class="bi bi-wallet2"></i> PAY</button>
                </form>
            </div>
        </div>
    </div>
@endsection