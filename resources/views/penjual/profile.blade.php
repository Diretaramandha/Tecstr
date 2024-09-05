@extends('template.side-bar-seller')
@section('content')
@include('sweetalert::alert')
<div class="container-fluid d-flex flex-wrap align-items-center justify-content-between border-bottom ">
    <div class="">
        <h1>Profile</h1>
        <p class="d-flex"><a href="" class="nav-link">Profile</a></p>
    </div>
    {{-- <h4 class="text-success"><i class="fs-3 bi bi-currency-dollar me-1"></i>12334</h4> --}}
</div>
<div class="container">
    <div class="d-flex flex-column align-items-center mt-5">
        <div class="mb-3 rounded-circle shadow p-3 d-flex justify-content-center flex-wrap align-items-center" style="width: 160px;height: 160px;">
            <img src="{{ $profile->foto == null ? asset('asset/foto-default/user.png') :  asset('storage/user/'.$profile->foto)}} " class=" " style="width: 80%;" alt="User Profile">
        </div>
        <div class=" border-bottom" style="width: 40%">
            <h3 class="fs-1 text-center">{{ $profile->name }}</h3>
        </div>
        <div class="" style="width: 40%">
            <form action="" method="post">
                <div class=" d-flex justify-content-between">
                    <p class=" mt-3">Bio User</p><a href="/profile/{{ $profile->id }}/change" class=" d-flex "><i class="f-2 mt-3 text-secondary bi bi-gear-fill"></i></a>
                </div>
                <div class="row">
                    <div class=" col-12 form-floating mb-2">
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="{{ $profile->name }}" aria-label="Disabled input example" disabled>
                        <label for="name" class=" ms-3">Name</label>
                    </div>
                    <div class=" col-12 form-floating my-2">
                        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control" value="{{ $profile->email }}" aria-label="Disabled input example" disabled>
                        <label for="email" class=" ms-3">Email</label>
                    </div>
                    <div class=" col-12 form-floating my-2">
                        <input type="text" name="no_tlp" id="number" placeholder="Enter number" class="form-control" value="{{ $profile->no_tlp }}" aria-label="Disabled input example" disabled>
                        <label for="number" class=" ms-3">No.Telpon</label>
                    </div>
                    <div class=" col-12 form-floating my-2">
                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" style="height: 100px" aria-label="Disabled input example" disabled>{{ $profile->alamat}}</textarea>
                        <label for="alamat" class=" ms-3">Alamat</label>
                    </div>
                </div>
                <p class=" mt-3">Password</p>
                <div class="row">
                    <div class=" col-12 form-floating my-2">
                        <input type="password" name="password" id="password" placeholder="Enter password" class="form-control" value="{{ $profile->password }}" aria-label="Disabled input example" disabled>
                        <label for="password" class=" ms-3">Password</label>
                    </div>
                </div>
            </form>
        </div>
        <p></p>
    </div>
</div>
@endsection