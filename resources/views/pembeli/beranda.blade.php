@extends('template.side-bar-customer')
@section('content')
    <div class="container pt-5">
        <div class="">
            <h4>Tekan Untuk Lihat hal Menarik!!!</h4>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
        
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <!-- The slideshow/carousel -->
            <div class="carousel-inner" style="height: 45vh">
              <div class="carousel-item active">
                <img src="{{ asset('asset/foto-default/laptop-1.png') }}" alt="Slide 1" class="d-block" style="width:100%;object-fit: cover" >
              </div>
              <div class="carousel-item">
                <img src="{{ asset('asset/foto-default/satup-pc.jpg') }}" alt="Slide 2" class="d-block" style="width:100%;object-fit: cover">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('asset/foto-default/Monitor.jpeg') }}" alt="Slide 3" class="d-block" style="width:100%;object-fit: cover">
              </div>
            </div>  
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
         
        </div>
    </div>
  
@endsection