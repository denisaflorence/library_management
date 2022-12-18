@extends('layout.template')
   <!-- START DATA -->
   @section('konten') 
   {{-- <ul> 
    @foreach ($data_buku as $buku)
    <li>{{$buku->judul_buku}}</li>
    <li>{{$buku->gambar_buku}}</li>
   @endforeach
   
   </ul> --}}
    
   <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top" width="200" height="300"
          alt="Skyscrapers" />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">
            This is a wider card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
          </p>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Pinjam</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top" width="200" height="300"
          alt="Los Angeles Skyscrapers" />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
          </p>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Pinjam</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/img/sang_pemimpi.jpeg" class="card-img-top" width="200" height="300"
          alt="Palm Springs Road" />
        <div class="card-body">
          <h5 class="card-title">Sang Pemimpi</h5>
          <p class="card-text">
            This is a wider card with supporting text below as a natural lead-in to
            additional content. This card has even longer content than the first to show
            that equal height action.
          </p>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Pinjam</button>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card h-100">
          <img src="/img/laskar_pelangi.jpeg" class="card-img-top" width="200" height="300"
            alt="img" />
          <div class="card-body">
            <h5 class="card-title">Laskar Pelangi</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
            </p>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Pinjam</button>
          </div>
        </div>
      </div>
  </div>
   @endsection
