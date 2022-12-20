@extends('layout.template')
        
<!-- START DATA -->
@section('konten')

<div class="col-md-12 bg-light text-right" style="margin-top: 20px;">
    <a href='/logout' class="btn btn-danger btn-sm"><i class="fa fa-sign-out" aria-hidden="true">Log out</i></a>
  </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-3">Gambar Buku</th>
                <th class="col-md-3">Judul Buku</th>
                <th class="col-md-3">Nama Pengarang</th>
                <th class="col-md-2">Tahun Terbit</th>
                <th class="col-md-3">Penerbit</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
       
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <th><img src="{{asset('images/'.$buku->gambar_buku)}}" width="150" height="170"></th>
                <th>{{$buku->judul_buku}}</th>
                <th>{{$buku->nama_pengarang}}</th>
                <th>{{$buku->tahun_terbit}}</th>
                <th>{{$buku->nama_penerbit}}</th>
                <td>
                    @if($buku->jumlah_buku != 0)
                        <a href='/addpinjaman/{{$buku->id_buku}}' class="btn btn-primary btn-sm">Pinjam</a>
                    @else
                        <a href='' class="btn btn-secondary btn-sm" disabled>Maaf, Buku Tidak Tersedia</a>
                    @endif
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{$data_buku->links()}} --}}
   
</div>
<!-- AKHIR DATA -->
@endsection


  
