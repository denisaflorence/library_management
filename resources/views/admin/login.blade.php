@extends('layout.template')
@section('konten')
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-3">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
<form action="{{route('admin.logining')}}" method="post">
    @csrf
    <!-- Email input -->
    
    <div class="form-group">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Masukan Alamat Email Anda" name="email">
  </div>
      <!-- Password input -->
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Password" name="password">
    </div>
    
    <button class="btn btn-primary" type="submit" style="margin-top: 10px;margin-bottom:15px;">Login</button>

    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
        <a href='{{url('admin/register-form')}}' class="text-body">Belum Punya Akun? Daftar Disini</a>
    </div>
</form> 
    </div>
</div>
@endsection 
