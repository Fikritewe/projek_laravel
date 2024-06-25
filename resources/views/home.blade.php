<!-- menghubungkan dengan view template blade php -->
@extends('master')

<!-- isi judul -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman','')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang fficia -->
@section('konten')
    

    <nav class="navbar navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img\logo2.png') }}" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvaslightNavbar" aria-controls="offcanvaslightNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvaslightNavbar" aria-labelledby="offcanvaslightNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvaslightNavbarLabel">KeretaApiIndonesia</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/blog">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/blog/pesan">Pesan Tiket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/kontak">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.reports') }}">Cek Riwayat</a>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav> <br> <br> <br>

  
 
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('img\eko.jpg') }}" alt="" >
      <div class="card-body">
        <h5 class="card-title">Kelas Ekonomi</h5>
        <p class="card-text">Kelas ekonomi merupakan kelas yang paling ekonomis dari semua kelas di kereta api. Kereta api kelas ekonomi memiliki 80 hingga 106 kursi dalam satu kereta, dan merupakan kelas dengan kursi paling banyak.</p>
      </div> <br>
  
      <div class="card-footer">
        <small class="text-body-secondary">@KeretaApiIndonesia</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="{{ asset('img\bis.png') }}" alt="">
      <div class="card-body">
        <h5 class="card-title">Kelas Bisnis</h5>
        <p class="card-text">Kelas bisnis memiliki fasilitas sedikit berbeda dengan Kelas Eksekutif yaitu tidak adanya reclining seat. Posisi kursi duduk juga bisa diubah sesuai keinginan penumpang, jika ingin berhadapan dengan kursi di depan atau belakangnya. Seperti halnya kelas ekonomi, di kelas bisnis pun sudah ada AC dan colokan listrik.</p>
      </div> <br>
      
      <div class="card-footer">
        <small class="text-body-secondary">@KeretaApiIndonesia</small>
      </div>
    </div>
  </div>
  <div class="col"> 
    <div class="card h-100">
    <img src="{{ asset('img\eks.png') }}" alt=""> 
      <div class="card-body">
        <h5 class="card-title">Kelas Eksklusif</h5>
        <p class="card-text">Jika ingin mendapatkan kenyamanan lebih, pilihlah kelas eksekutif. Di dalam kereta hanya menampung kapasitas 50 penumpang. Fasilitas yang akan kamu dapatkan pun lebih maksimal. Susunan tempat duduk kelas eksekutif adalah 2-2. Kursinya empuk dan bisa diatur sesuai keinginan. Ruang kakinya lebar dan ada pijakan kaki, sehingga kamu lebih nyaman ketika meluruskan kaki.</p>
      </div> <br>
      
      <div class="card-footer">
        <small class="text-body-secondary">@KeretaApiIndonesia</small> <br>
      </div>
    </div>
    </div>
  </div>
</div>
<footer align="center">
  <p>&copy; 2023 Kereta Api Indonesia</p>
</footer>



@endsection