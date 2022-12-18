@extends('layout.template')
@section('konten')
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
<form action="{{route('admin.logining')}}" method="post">
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example3">Alamat Email</label>
        <input type="email" name="email">
      </div>
      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form3Example4">Password</label>
        <input type="password" name="password" id="">
      </div>
    
    <button type="submit">Login</button>

    <div class="d-flex justify-content-between align-items-center">
        <a href='{{url('admin/register-form')}}' class="text-body">Belum Punya Akun? Daftar Disini</a>
    </div>
</form> 
    </div>
</div>
@endsection 
