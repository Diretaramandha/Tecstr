<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mirai</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/color.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/side-bar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body >
    <div class="navbar navbar-expand-md navbar-dark bg-biru-tua" style="">
        <div class="container-fluid">
            <a href="/home" class="navbar-brand ms-5">
                <img src="{{ asset('asset/logo/logo-tecstr-remove.png') }}" alt="" srcset="" style="width: 70px;height: 50px; object-fit: cover">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbar">
                <ul class="navbar-nav ">
                    <li class="nav-item fw-bolder ">
                        <a href="" class="nav-link fw-bold">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown">CATEGORIES</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Laptop</a></li>
                          <li><a class="dropdown-item" href="#">Set PC</a></li>
                          <li><a class="dropdown-item" href="#">Prosesor</a></li>
                          <li><a class="dropdown-item" href="#">Ram</a></li>
                          <li><a class="dropdown-item" href="#">SSD OR Hardisk</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/home/profile" class="nav-link fw-bold">PROFILE</a>
                    </li>
                </ul>
                <form action="" method="post" class="d-flex">
                    <input type="search" name="cari" id="cari" class="form-control " style="width: 620px;border-radius: 20px" placeholder="Search....">
                    <button type="submit" class=" bg-white rounded-circle mt-1" style="border: none;margin-left: -6%;height: 20px;" id="cari"><i class="bi bi-search"></i></button> 
                </form>
                <div class="d-flex justify-content-evenly" style="width: 350px;">
                    <a href="/home/keranjang" class="text-white d-flex flex-column align-items-center text-decoration-none pt-2" style="">
                        <p class="btn btn-outline-light fw-bold">
                            <i class="bi bi-basket " style="font-size: 18px"></i>
                        </p>
                    </a>
                    <a href="/logout" class="text-white d-flex flex-column align-items-center text-decoration-none pt-2" style="">
                        <p class="btn btn-outline-light fw-bold">
                            <i class="bi bi-box-arrow-right pe-2" style="font-size: 18px"></i>
                            LOGOUT
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
</html>