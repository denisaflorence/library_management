@extends('layout.template')
        
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>
    

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-4">Gambar Buku</th>
                <th class="col-md-3">Judul Buku</th>
                <th class="col-md-1">Nama Pengarang</th>
                <th class="col-md-2">Tahun Terbit</th>
                <th class="col-md-2">Penerbit</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <th>{{$buku->gambar_buku}}</th>
                <th>{{$buku->judul_buku}}</th>
                <th>{{$buku->nama_pengarang}}</th>
                <th>{{$buku->tahun_terbit}}</th>
                <th>{{$buku->nama_penerbit}}</th>
                <td>
                    <a href='' class="btn btn-primary btn-sm">Pinjam</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$data_buku->links()}}
   
</div>
<!-- AKHIR DATA -->
@endsection

  
