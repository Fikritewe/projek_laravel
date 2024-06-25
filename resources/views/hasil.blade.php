@extends('master')
@section('konten')

<section>
    <div>
        <div class="mb-5">
            <h2><span>Show </span> Message</h2>  
        </div>
        <div class="row">
            <div>
                <!-- Success Message -->
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('nama') || session('email') || session('pesan'))
                    <div class="alert alert-success">
                        @if (session('nama'))
                            <p>Name: {{ session('nama') }}</p>
                        @endif
                        @if (session('email'))
                            <p>Email: {{ session('email') }}</p>
                        @endif
                        @if (session('pesan'))
                            <p>Message: {{ session('pesan') }}</p>
                        @endif
                    </div>

                    <a href="{{ route('admin.reports') }}" class="btn btn-info">Cek Riwayat</a>
                @else
                    <div class="alert alert-danger text-center">No message sent!</div>
                @endif
            </div>
        </div>
    </div>
</section>