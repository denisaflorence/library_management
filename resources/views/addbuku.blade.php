@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action='{{url('addbuku')}}' method='post' enctype="multipart/form-data">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='gambar_buku' id="inputgambar" accept="image/*">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='judul_buku' id="inputjudul">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pengarang" class="col-sm-2 col-form-label">Nama Pengarang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_pengarang' id="inputnama_pengarang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='tahun_terbit' id="inputtahun_terbit">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penerbit" class="col-sm-2 col-form-label">Nama Penerbit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_penerbit' id="inputnama_penerbit">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Buku</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='jumlah_buku' id="inputjumlah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="simpan_data" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
@endsection
 