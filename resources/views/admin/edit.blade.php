<!-- menghubungkan dengan view template blade php -->
@extends('master')

<!-- isi judul -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman','')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang fficia -->
@section('konten')
        <style>
      
            body {
                background-color: #f0f0f0;
            }
            
            .container {
                margin-top: 20px;
            }
            
            .form-label {
                font-weight: bold;
            }
    
            .alert {
                background-color: #4CAF50;
                color: white;
                border: 1px solid #45a049;
            }
    
            .btn-primary {
                background-color: #4CAF50;
                border: none;
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
          </nav> <br> 
          <br> 
        <div class="container my-5">
            <h2 class="fs-4 fw-bold text-center">Kontak Kami</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('admin.reports.update', $message) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama', $message->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', $message->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control @error('pesan') is-invalid @enderror">{{ old('pesan', $message->pesan) }}</textarea>
                            @error('pesan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
      