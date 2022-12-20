@extends('layout.template')
        
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-3">ID User</th>
                <th class="col-md-3">ID Buku</th>
                <th class="col-md-3">Tanggal Pinjam</th>
                <th class="col-md-3">Tanggal Kembali</th>
                <th class="col-md-3">Status Peminjaman</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pinjam as $pinjam)
            <tr>
                {{-- <th>{{$pinjam->nama}}</th>
                <th>{{$pinjam->judul_buku}}</th> --}}
                <th>{{$pinjam->id_user}}</th>
                <th>{{$pinjam->id_buku}}</th>
                <th>{{$pinjam->tanggal_pinjam}}</th>
                <th>{{$pinjam->tanggal_kembali}}</th>
                <td>
                    @if(($pinjam->status_del) == 0)
                        <a href='/adddata/{{$pinjam->id_peminjaman}}' class="btn btn-warning btn-sm">Kembalikan</a>
                    @else
                        <a href='' class="btn btn-secondary btn-sm" disabled>Sudah Kembali</a>
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

  
