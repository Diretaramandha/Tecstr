<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduZen</title>
    <link rel="icon" href="{{ asset('asset/logo/logo-tecstr-remove.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/color.css') }}">
</head>
<body class="bg-hitam">
    <div class="container pt-5 d-flex justify-content-center">
        <div class="row shadow  mt-5 p-4 bg-biru-tua rounded" style="height: 68vh;">
            <div class="col-lg-7 d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-center fw-bolder mb-5 color-putih" style="font-size: 48px">Register</h1>
                <form action="/register/1" method="post" class="d-flex flex-column align-items-center">
                    @csrf
                    <div class="row" style="width: 90%">
                        <div class="col-md-12 mb-4 form-floating">
                            <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control">
                            <label for="email" class="ms-3 text-secondary">Name</label>
                        </div>
                        <div class="col-md-12 mb-5 form-floating">
                            <input type="password" name="password" id="pass" placeholder="Enter Username" class="form-control">
                            <label for="pass" class="ms-3 text-secondary">Role</label>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <input type="submit" value="Next" class="rounded text-light p-2 fw-bold bg-pink-muda" style=" width: 50%;font-size: 1.4rem; border: none">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 d-flex">
                <img src="{{ asset('asset/logo/TECSTR-remove.png') }}" class="justify-content-center " alt="" srcset="" style="width: 100%; object-fit: cover">
            </div>
        </div>
    </div>
</body>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</html>