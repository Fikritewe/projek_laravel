@extends('master')
@section('konten')
{{-- index (menampilkan semua) --}}
<section>
    <div>
        <div class="mb-5">
            <h2><span>Report</span></h2>  
        </div>
        <div class="mt-2">
            <a href="{{ route('Kontak.pesan') }}" class="btn btn-primary">Tambah Data</a>
            <a href="/blog" class="btn btn-info">Kembali ke Halaman Utama</a>
        </div>
        <!-- Alert Success -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <!-- Content Here -->
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th> <!-- Kolom baru untuk tombol Hapus -->
                    </tr>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->nama }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->pesan }}</td>
                            <td>
                                <form action="{{ route('admin.reports.delete', ['id' => $message->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                                <a href="{{ route('admin.reports.edit', ['id' => $message->id]) }}" class="btn btn-outline-primary btn-sm">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection