<!-- menghubungkan dengan view template blade php -->
@extends('master')

<!-- isi judul -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', '')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang fficia -->
@section('konten')

    @if (session('success'))
        <div class="alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert-danger">
            <ul>

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ url('posts') }}">
        @csrf

        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img\logo2.png') }}" alt="Logo" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvaslightNavbar" aria-controls="offcanvaslightNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvaslightNavbar"
                    aria-labelledby="offcanvaslightNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvaslightNavbarLabel">KeretaApiIndonesia</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
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
        </nav> <br>
        <header> <br>
            <h1>Pemesanan Tiket Kereta Api Indonesia</h1>
        </header>
        <div class="container">
            <form>
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="tanggal">Tanggal Keberangkatan:</label>
                <input type="date" id="tanggal" name="tanggal" required>

                <label for="kotaAsal">Kota Asal:</label>
                <select id="kotaAsal" name="kotaAsal" required>
                    <option value="Jakarta">Cowek</option>
                    <option value="Surabaya">Pandaan</option>
                    <option value="Yogyakarta">Lawang</option>
                    <!-- Tambahkan pilihan kota lainnya sesuai kebutuhan -->
                </select>

                <label for="kotaTujuan">Kota Tujuan:</label>
                <select id="kotaTujuan" name="kotaTujuan" required>
                    <option value="Bandung">Surabaya</option>
                    <option value="Semarang">Solo</option>
                    <option value="Malang">Semarang</option>
                    <!-- Tambahkan pilihan kota lainnya sesuai kebutuhan -->
                </select>

                <button type="submit">Pesan Tiket</button>
            </form>
        </div>
        <footer align="center">
            <p>&copy; 2023 Kereta Api Indonesia</p>
        </footer>


    @endsection
