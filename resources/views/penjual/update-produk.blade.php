@extends('template.side-bar-seller')
@section('content')
@include('sweetalert::alert')
<div class="container-fluid d-flex flex-wrap align-items-center justify-content-between border-bottom ">
    <div class="">
        <h1>Product Upgrade</h1>
        <p class="d-flex"><a href="" class="nav-link">Product Upgrade</a></p>
    </div>
    {{-- <h4 class="text-success"><i class="fs-3 bi bi-currency-dollar me-1"></i>12334</h4> --}}
</div>
<div class="container">
    <form action="/product/upgrade/{{ $produk->id }}" method="post" enctype="multipart/form-data" >
        @csrf
        
        <div class="container">
            <div class=" d-flex justify-content-center my-5 ">
                <div class="row shadow py-5 px-4 rounded" style="width: 800px">
                    <h1 class=" fw-bold text-center">Upgrade Product</h1>
                        <div class=" col-12 mb-3">
                            <label for="" class=" fs-6 fw-bold mb-1">Product maker name :</label>
                            <input type="text" name="id_user" id="" class=" form-control" placeholder="" value="{{ $produk->user->name  }}">
                        </div>
                    <div class=" col-12 mb-3">
                        <label for="" class=" fs-6 fw-bold mb-1">Product name :</label>
                        <input type="text" name="produk" id="" class=" form-control" placeholder="" value="{{ $produk->produk }}">
                    </div>
                    <div class=" col-12 mb-3">
                        <label for="" class=" fs-6 fw-bold mb-1">Product description :</label>
                        <textarea name="deskripsi" class=" form-control" id="" cols="30" rows="6" value="">{{ $produk->deskripsi }}</textarea>
                    </div>
                    <div class=" col-12 mb-3">
                        <label for="" class=" fs-6 fw-bold mb-1">Product categories :</label>
                        <select name="kategori" id="" class=" form-select" style="width: 300px">
                            <option value="laptop" {{ $produk->kategori == 'laptop' ? 'selected' : '' }}>Laptop</option>
                            <option value="pc" {{ $produk->kategori == 'pc' ? 'selected' : '' }}>PC</option>
                            <option value="hp" {{ $produk->kategori == 'hp' ? 'selected' : '' }}>HP</option>
                        </select>
                    </div>
                    <div class=" col-12 mb-3">
                        <label for="" class=" fs-6 fw-bold mb-1">Product price :</label>
                        <input type="text" name="harga" id="" class=" form-control" placeholder="" style="width: 300px" value="{{ $produk->harga }}">
                    </div>
                    <div class=" col-12 mb-3">
                        <label for="" class=" fs-6 fw-bold mb-1">Product stock :</label>
                        <input type="text" name="stok" id="" class=" form-control" placeholder="" style="width: 300px" value="{{ $produk->stok }}">
                    </div>
                    <div class=" col-12 mb-3 d-flex flex-column">
                        <label for="" class=" fs-6 fw-bold mb-1">Product image :</label>
                        <div class=" shadow rounded p-5 d-flex justify-content-center">
                            <img src="{{ asset('storage/foto/'.$produk->foto) }}" class="" alt="" srcset="" width="200px" height="200px">
                        </div>
                    </div>
                    <div class=" col-12 mb-3">
                        <label for="" class=" fs-6 fw-bold mb-1">Change product image :</label>
                        <input type="File" name="foto" id="" class=" form-control" placeholder="" style="width: 300px" >
                    </div>
                    <div class="col-12 mb-3 d-flex justify-content-end">
                        <input type="submit" value="Upgrade" class=" btn btn-primary" style="width: 200px">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

{{-- <script>
    console.log({{ $produk }});
</script> --}}

@endsection