@extends('layout.template')
@section('konten')
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-70" style="margin-top: 30px;">
      {{-- <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div> --}}
    
        <form action="{{route('user.register')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="name" class="form-control" id="inputNama" placeholder="Masukan Nama Anda" name="name">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Masukan Alamat Email Anda" name="email">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Password" name="password">
            </div>
            <div class="form-group">
                <label for="phone">No Telp</label>
                <input type="tel" class="form-control" id="inputPhone" placeholder="Masukan Nomor Ponsel Anda" name="telp">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Masukan Alamat Anda" name="alamat">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px;margin-bottom:30px;">Register</button>
        </form> 
@endsection 