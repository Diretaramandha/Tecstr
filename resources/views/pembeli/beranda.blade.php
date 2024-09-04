@extends('template.side-bar-customer')
@section('content')
    <div class="container pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Carousel -->
            <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
              
              <!-- Indicators/dots -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
              </div>
              
              <!-- The slideshow/carousel -->
              <div class="carousel-inner shadow " style="height: 45vh;">
                <div class="carousel-item active d-flex justify-content-center">
                  <img src="{{ asset('asset/foto-default/laptop-1.png') }}" alt="Slide 1" class="d-block" style="object-fit: cover; height: 45vh; ">
                  <div class="carousel-caption d-flex flex-column justify-content-center" style="background: linear-gradient(180deg, rgba(0,212,255,0) 0%, rgba(2,0,36,1) 100%); height: 30vh; width: 100%; margin-left: -15%; margin-bottom: -6%">
                    <h5>Laptop 1</h5>
                    <p>This is a description of Laptop 1</p>
                  </div>
                </div>
                <div class="carousel-item d-flex justify-content-center">
                  <img src="{{ asset('asset/foto-default/satup-pc.jpg') }}" alt="Slide 2" class="d-block" style="object-fit: cover; height: 45vh; ">
                  <div class="carousel-caption d-flex flex-column justify-content-center" style="background: linear-gradient(180deg, rgba(0,212,255,0) 0%, rgba(2,0,36,1) 100%); height: 30vh; width: 100%; margin-left: -15%; margin-bottom: -6%">
                    <h5>Satup PC</h5>
                    <p>This is a description of Satup PC</p>
                  </div>
                </div>
                <div class="carousel-item d-flex justify-content-center">
                  <img src="{{ asset('asset/foto-default/Monitor.jpeg') }}" alt="Slide 3" class="d-block" style="object-fit: cover; height: 45vh; ">
                  <div class="carousel-caption d-flex flex-column justify-content-center" style="background: linear-gradient(180deg, rgba(0,212,255,0) 0%, rgba(2,0,36,1) 100%); height: 30vh; width: 100%; margin-left: -15%; margin-bottom: -6%">
                    <h5>Monitor</h5>
                    <p>This is a description of Monitor</p>
                  </div>
                </div>
              </div>  
            </div>
          </div>
          {{-- <div class="col-md-12 mt-5">
            <div class="container">
              <div class="row shadow px-3 py-4">
                <div class="col-md-12 mb-4">
                  <h3>Categories</h3>
                </div>
                <div class="col-md-2 ">
                  <a href="" class=" text-decoration-none">
                    <div class=" card" style="width: 10rem; height: 24vh;">
                      <img src="{{ asset('asset/foto-default/ryzen.jpg') }}" class=" card-img" alt="" height="110vh">
                      <p class=" card-title ms-2 fs-5 pt-2 ">Handphone</p>
                    </div>
                  </a>
                </div>
                <div class="col-md-2 ">
                  <a href="" class=" text-decoration-none">
                    <div class=" card" style="width: 10rem; height: 24vh;">
                      <img src="{{ asset('asset/foto-default/ryzen.jpg') }}" class=" card-img" alt="" height="110vh">
                      <p class=" card-title ms-2 fs-5 pt-2 ">Laptop</p>
                    </div>
                  </a>
                </div>
                <div class="col-md-2 ">
                  <a href="" class=" text-decoration-none">
                    <div class=" card" style="width: 10rem; height: 24vh;">
                      <img src="{{ asset('asset/foto-default/ryzen.jpg') }}" class=" card-img" alt="" height="110vh">
                      <p class=" card-title ms-2 fs-5 pt-2 ">PC</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="col-md-12 py-5">
            <div class="container">
              <div class="row shadow px-3 py-4">
                <div class="col-md-12 mb-4">
                  <h3>Product</h3>
                </div>
                @foreach ($produk as  $item)
                  <div class="col-md-3 mb-4">
                    <div class=" card" style="width: 16rem; height: 380px;">
                      <img src="{{ asset('storage/foto/'.$item->foto) }}" class=" card-img " alt="" height="200px">
                      <p class=" card-title ms-2 fs-4 pt-2 ">{{ $item->produk }}</p>
                      {{-- @foreach ($user as $item)
                      <div class=" card-title d-flex mt-2 ms-2">
                        <img src="{{ $item->foto == null ? asset('asset/foto-default/user.png') : asset('storage/user/'.$item->user->foto)}} " class=" rounded-circle" style="width: 25px; height: 25px;object-fit: cover" alt="User Profile">
                        <p class=" ms-2  ">{{ $item->name }}</p>
                      </div>
                      @endforeach --}}
                      <div class=" text-end  me-2 mb-2 mt-5 d-flex justify-content-end">
                        <a href="/home/detail/{{ $item->id }}" class="btn btn-secondary me-1"><i class="bi bi-search"></i></a>

                        <form action="/transaksi/{{ $item->id }}" method="post" class=" me-1">
                          @csrf
                          <button type="submit" class="btn btn-success"><i class="bi bi-bag"></i> BUY</button>
                        </form>
                        <form action="/home/keranjang/{{ $item->id }}" method="post" class="btn btn-primary">
                          @csrf
                          <button type="submit" class=" bg-transparent border-0 text-white">
                            <i class="bi bi-bookmark"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
@endsection