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
        <div class=" shadow  mt-5 p-4 bg-biru-tua rounded" style="height: 80vh;width: 100%;">
            <form action="/register" method="post" enctype="multipart/form-data" class=" text-white px-5 " >
                @csrf
                <h1 class="text-center fw-bold mt-5" style="font-size: 2.5rem">Register</h1>
                <div class="row my-3 text-white">
                    <div class="col-12">
                    </div>
                    <div class="col-6 ">
                        <div class="row">
                            <div class="col-12 mb-4 h">
                                <label for="name" class="mb-2 ">Name :</label>
                                <input type="name" name="name" id="name" placeholder=" Name " class="form-control" style="height: 80%">
                            </div>
                            <div class="col-12 mb-4 h">
                                <label for="tlp" class="mb-2 ">No.Telpon :</label>
                                <input type="number" name="no_tlp" id="tlp" placeholder=" Telpon " class="form-control" style="height: 80%">
                            </div>
                            <div class="col-12 mb-4 h">
                                <label for="alamat" class="mb-2 ">Alamat :</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-12 mb-4 h">
                                <label for="role" class="mb-2 ">Role :</label>
                                <select name="role" id="role" class=" form-select" style="height: 80%">
                                    <option value=""></option>
                                    <option value="customer">customer</option>
                                    <option value="seller">seller</option>
                                </select>
                            </div>
                            <div class="col-12 mb-4 h">
                                <label for="role" class="mb-2 ">Images :</label>
                                <input type="file" name="foto" id="" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 mb-4 h">
                                <label for="email" class="mb-2 ">Email  :</label>
                                <input type="email" name="email" id="email" placeholder=" Email " class="form-control" style="height: 80%">
                            </div>
                            <div class="col-12 mb-4 h">
                                <label for="pass" class="mb-2 ">Password :</label>
                                <input type="password" name="password" id="pass" placeholder=" Password " class="form-control" style="height: 80%">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-flex justify-content-end">
                        <input type="submit" value="Create" class=" bg-pink-muda border-0 p-2 text-white fw-bold rounded w-25">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</html>