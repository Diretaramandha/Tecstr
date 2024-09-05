@extends('template.side-bar-customer')
@section('content')
@include('sweetalert::alert')
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="d-flex flex-column align-items-center mt-5 shadow p-5 rounded">
        @csrf
        <div class="mb-3 rounded-circle shadow p-3 d-flex justify-content-center flex-wrap align-items-center" style="width: 160px;height: 160px;">
            <img src="{{ $profile->foto == null ? asset('asset/foto-default/user.png') :  asset('storage/user/'.$profile->foto)}} " class=" " style="width: 80%" alt="User Profile">
        </div>
        <div class="w-75">
            <a href="/home/profile" class=" text-decoration-none text-secondary text-start"><i class="bi bi-arrow-left fs-2"></i></a>
        </div>
        <div class=" border-bottom" style="width: 60%">
            <label for="">Change Images :</label>
            <input type="file" name="foto" class=" form-control" id="">
        </div>
        <div class="" style="width: 60%">
            <form action="" method="post">
                <div class=" d-flex justify-content-between">
                    <p class=" mt-3">Bio User</p>
                </div>
                <div class="row">
                    <div class=" col-12 form-floating mb-2">
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="{{  $profile->name }}">
                        <label for="name" class=" ms-3">Name</label>
                    </div>
                    <div class=" col-12 form-floating my-2">
                        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control" value="{{  $profile->email }}">
                        <label for="email" class=" ms-3">Email</label>
                    </div>
                    <div class=" col-12 form-floating my-2">
                        <input type="text" name="no_tlp" id="number" placeholder="Enter number" class="form-control" value="{{  $profile->no_tlp }}">
                        <label for="number" class=" ms-3">No.Telpon</label>
                    </div>
                    <div class=" col-12 form-floating my-2">
                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" style="height: 100px" >{{  $profile->alamat }}</textarea>
                        <label for="alamat" class=" ms-3">Alamat</label>
                    </div>
                </div>
                <p class=" mt-3">Password</p>
                <div class="row">
                    <div class=" col-12 form-floating my-2">
                        <input type="password" name="password" id="password" placeholder="Enter password" class="form-control" value="{{  $profile->password }}">
                        <label for="password" class=" ms-3">Password</label>
                    </div>
                    <div class=" d-flex justify-content-end col-12 form-floating my-2">
                        <input type="submit" value="Change" class="btn btn-secondary w-25">
                    </div>
                </div>
            </form>
        </div>
        <p></p>
    </form>
</div>
@endsection