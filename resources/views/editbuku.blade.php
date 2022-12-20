@extends('layout.template')
<!-- START DATA -->
@section('konten')

<div class="my-3 p-2 bg-body rounded shadow-sm">
 
	<h3>Edit Buku</h3>
 

	
	<br/>
	<br/>
	
	{{-- <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-2">Gambar Buku</th>
                <th class="col-md-2">Judul Buku</th>
                <th class="col-md-2">Nama Pengarang</th>
                <th class="col-md-2">Tahun Terbit</th>
				<th class="col-md-2">Jumlah Buku</th>
                <th class="col-md-3">Penerbit</th>
            </tr>
        </thead>
        <tbody> --}}
			<form action="/buku/update" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				@foreach($buku as $buk)
				<input type="hidden" name="id_buku" value="{{ $buk->id_buku }}"> <br/>
				<div class="form-group">
					<label for="updateGambar">Gambar</label>
					<input type="file" class="form-control"  name="file_gambar">
					<input type="hidden" name="gambar_buku" value="{{$buk->gambar_buku}}"> 
				</div>
				<div class="form-group">
					<label for="updateJudul">Judul Buku</label>
					<input type="text" class="form-control" required="required" name="judul_buku" value="{{ $buk->judul_buku }}"> 
				</div>
				<div class="form-group">
					<label for="updatePengarang">Nama Pengarang</label>
					<input type="text" class="form-control" required="required" name="nama_pengarang" value="{{ $buk->nama_pengarang }}"> 
				</div>
				<div class="form-group">
					<label for="updateTahun">Tahun Terbit</label>
					<input type="number" class="form-control" required="required" name="tahun_terbit" value="{{ $buk->tahun_terbit }}">
				</div>
				<div class="form-group">
					<label for="updateJumlah">Jumlah Buku</label>
					<input type="number" class="form-control" required="required" name="jumlah_buku" value="{{ $buk->jumlah_buku }}"> 
				</div>
				<div class="form-group">
					<label for="updateJumlah">Nama Penerbit</label>
					<input type="text" class="form-control" required="required" name="nama_penerbit" value="{{ $buk->nama_penerbit }}"> 
				</div>
				<input type="submit" class="btn btn-primary" value="Simpan Data">
				{{-- <button class="btn btn-primary" type="submit" style="margin-top: 30px;margin-bottom:15px;">Login</button> --}}
				{{-- <input type="hidden" name="id_buku" value="{{ $buk->id_buku }}"> <br/>
				<input type="hidden" name="gambar_buku" value="{{$buk->gambar_buku}}"> <br/>
				<th><input type="file" name="file_gambar"> <br></th>
				<th><input type="text" required="required" name="judul_buku" value="{{ $buk->judul_buku }}"> <br/></th>
				<th><input type="text" required="required" name="nama_pengarang" value="{{ $buk->nama_pengarang }}"> <br/></th>
				<th><input type="number" required="required" name="tahun_terbit" value="{{ $buk->tahun_terbit }}"> <br/></th>
				<th><input type="number" required="required" name="jumlah_buku" value="{{ $buk->jumlah_buku }}"> <br/></th>
				<th><textarea required="required" name="nama_penerbit">{{ $buk->nama_penerbit }}</textarea> <br/></th>
				{{-- <th><input type="submit" value="Simpan Data"></td> --}}
				
			</form>
			@endforeach
		{{-- </tr> --}}
<!-- AKHIR DATA -->
@endsection