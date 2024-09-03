<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecstr</title>
    <link rel="icon" href="{{ asset('asset/logo/logo-tecstr-remove.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/color.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/side-bar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body >
    <div class="container-fluid"> 
        <div class="row flex-nowarp">
            <div class="bg-hitam col-2 col-md-3 col-lg-2 min-vh-100 d-flex flex-column justify-content-between fixed-top" >
                <div class="bg-hitam p-2">
                    <a href="" class="d-flex flex-wrap align-items-center justify-content-center text-decoration-none text-white border-bottom border-secondary mb-5">
                        <img src="{{ asset('asset/logo/logo-tecstr-remove.png') }}" style="width: 70px;height: 70px;" alt="" srcset="">
                        <h3 class="ms-2">TECSTR</h3>
                    </a>
                    <ul class="nav nav-pills flex-column mt-2">
                        <li class="nav-item  py-2 py-sm-1 border-bottom border-secondary">
                            <a href="/admin" class="nav-link text-white">
                               <i class="fs-5 bi bi-bar-chart-fill active"></i><span class="fs-6 ms-3 d-none d-sm-inline">Dashbord</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item  py-2 py-sm-1 dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fs-5 bi bi-bar-chart-fill"></i><span class="fs-5 ms-3 d-none d-sm-inline">Produk</span>
                            </a>
                            <ul class="dropdown-menu bg-hitam ms-5">
                              <li><a class="dropdown-item text-white" href="#">Link</a></li>
                              <li><a class="dropdown-item text-white" href="#">Another link</a></li>
                              <li><a class="dropdown-item text-white" href="#">A third link</a></li>
                            </ul>
                          </li> --}}
                        <li class="nav-item  py-2 py-sm-1 border-bottom border-secondary">
                            <a href="/product" class="nav-link text-white">
                                <i class="fs-5 bi bi-box-seam"></i></i><span class="fs-6 ms-3 d-none d-sm-inline">Product</span>
                            </a>
                        </li>
                         <li class="nav- item  py-2 py-sm-1 border-bottom border-secondary">
                            <a href="/profile" class="nav-link text-white">
                                <i class="fs-5 bi bi-person-circle"></i></i><span class="fs-6 ms-3 d-none d-sm-inline">Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="/logout" class="text-white d-flex flex-column align-items-center text-decoration-none pt-2" style="">
                    <p class="btn btn-outline-light fw-bold">
                        <i class="bi bi-box-arrow-right pe-2" style="font-size: 18px"></i>
                        LOGOUT
                    </p>
                </a>
            </div>
        </div>
        <div class="" style="margin-left: 17%">
            @yield('content')
        </div>
    </div>
</body>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>   
<script type="text/Javascript">
    $(document).ready( function () {
    $('#data_table').DataTable();
    } );
</script>
</html>