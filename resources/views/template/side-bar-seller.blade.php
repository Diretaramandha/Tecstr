<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecstr</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/color.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/side-bar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body >
    <div class="container-fluid"> 
        <div class="row flex-nowarp">
            <div class="bg-hitam col-auto col-md-3 col-lg-2 min-vh-100 d-flex flex-column justify-content-between" >
                <div class="bg-hitam p-2">
                    <a href="" class="d-flex align-items-center text-decoration-none text-white">
                        <span class="fs-4 d-none d-sm-inline">TECSTR</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-2">
                        <li class="nav-item  py-2 py-sm-0">
                            <a href="" class="nav-link text-white">
                               <i class="fs-5 bi bi-bar-chart-fill active"></i><span class="fs-5 ms-3 d-none d-sm-inline">Dashbord</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item  py-2 py-sm-0 dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fs-5 bi bi-bar-chart-fill"></i><span class="fs-5 ms-3 d-none d-sm-inline">Produk</span>
                            </a>
                            <ul class="dropdown-menu bg-hitam ms-5">
                              <li><a class="dropdown-item text-white" href="#">Link</a></li>
                              <li><a class="dropdown-item text-white" href="#">Another link</a></li>
                              <li><a class="dropdown-item text-white" href="#">A third link</a></li>
                            </ul>
                          </li> --}}
                        <li class="nav-item  py-2 py-sm-0">
                            <a href="" class="nav-link text-white">
                                <i class="fs-5 bi bi-bar-chart-fill"></i><span class="fs-5 ms-3 d-none d-sm-inline">Produk</span>
                            </a>
                        </li>
                        <li class="nav-item  py-2 py-sm-0">
                            <a href="" class="nav-link text-white">
                               <i class="fs-5 bi bi-bar-chart-fill"></i><span class="fs-5 ms-3 d-none d-sm-inline">Users</span>
                            </a>
                        </li>   
                    </ul>
                </div>
                <a href="" class="text-white d-flex flex-column align-items-center text-decoration-none pt-2" style="">
                    <p class="btn btn-outline-light fw-bold">
                        <i class="bi bi-box-arrow-right pe-2" style="font-size: 18px"></i>
                        LOGOUT
                    </p>
                </a>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
</html>