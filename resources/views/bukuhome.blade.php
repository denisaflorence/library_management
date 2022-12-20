@extends('layout.template')
     
<!-- START DATA -->
@section('konten')
{{-- <div class="my-3 p-3 bg-body rounded shadow-sm"> --}}
    {{-- <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-top: 20px;">Logout</button>
      </form> --}}
      {{-- <div class="col-md-12 bg-light text-right" style="margin-top: 20px;">
        <a href='/logout' class="btn btn-danger btn-lg">log out</a>
      </div> --}}
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3" style="margin-top: 30px;">
      <a href='{{url('create')}}' class="btn btn-primary btn-lg">+ Tambah Data</a>
    </div>
    <!-- TOMBOL DATA PEMINJAMAN -->
    <div class="pb-3">
        <a href='{{url('data')}}' class="btn btn-info btn-lg"> Data Peminjaman</a>
        <a href='/logout' class="btn btn-danger btn-lg" style="margin-left: 1100px">log out</a>
      </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-3">Gambar Buku</th>
                <th class="col-md-3">Judul Buku</th>
                <th class="col-md-2">Nama Pengarang</th>
                <th class="col-md-2">Tahun Terbit</th>
                <th class="col-md-2">Penerbit</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <th><img src="{{asset('images/'.$buku->gambar_buku)}}" width="150" height="200"></th>
                <th>{{$buku->judul_buku}}</th>
                <th>{{$buku->nama_pengarang}}</th>
                <th>{{$buku->tahun_terbit}}</th>
                <th>{{$buku->nama_penerbit}}</th>
                <td>
                    <a href="/buku/edit/{{ $buku->id_buku }}" class="btn btn-warning" style="margin-bottom: 10px;">Edit</a>
                    <a href="/buku/hapus/{{ $buku->id_buku}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
{{-- </div> --}}
<!-- AKHIR DATA -->
@endsection

  
