<!-- menghubungkan dengan view template blade php -->
@extends('master')

<!-- isi judul -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman','')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang fficia -->
@section('konten')

    <style>
      /* Mengubah tampilan scrollbar vertikal */
/* Width untuk scrollbar vertikal */
::-webkit-scrollbar {
width: 10px; /* Ganti dengan lebar yang Anda inginkan */
}

/* Warna latar belakang scrollbar */
::-webkit-scrollbar-track {
background: #f1f1f1; /* Ganti dengan warna latar belakang yang Anda inginkan */
}

/* Warna thumb scrollbar (bagian yang bisa digerakkan) */
::-webkit-scrollbar-thumb {
background: #888; /* Ganti dengan warna thumb yang Anda inginkan */
border-radius: 6px;
}

/* Hover pada thumb scrollbar */
::-webkit-scrollbar-thumb:hover {
background: #555; /* Ganti dengan warna thumb hover yang Anda inginkan */
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007ACC;
            color: white;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .feature {
            display: flex;
            margin-top: 20px;
            align-items: center;
        }

        .feature img {
            max-width: 100px;
            margin-right: 20px;
        }

        .feature p {
            flex-grow: 1;
        }

       
    </style>
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
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav> <br> <br>
    <header>
        <h1>Selamat Datang di Website Kereta Api Indonesia</h1>
    </header>
    <div class="container">
        <h2>Tentang Kami</h2>
        <p>Kereta Api Indonesia (KAI) adalah perusahaan yang mengoperasikan layanan kereta api di seluruh Indonesia. Kami berkomitmen untuk menyediakan layanan transportasi yang aman, nyaman, dan terpercaya kepada pelanggan kami.</p>

        <h2>Fitur Utama</h2>
        <div class="feature">
            <img src="{{ asset('img\ikonkereta.jpg') }}" alt="Icon Kereta">
            <p>Layanan kereta api dengan rute yang luas di seluruh Indonesia.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('img\pesan.png') }}" alt="Icon Tiket">
            <p>Pemesanan tiket online yang mudah dan cepat.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('img\layanan.png') }}" alt="Icon Layanan">
            <p>Layanan pelanggan 24/7 untuk menjawab pertanyaan dan membantu Anda.</p>
        </div>
    </div>
    <footer align="center">
        <p>&copy; 2023 Kereta Api Indonesia</p>
    </footer>

@endsection