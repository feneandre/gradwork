@extends('layout')

@section('title', 'Form Laporan')

@section('content')
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Form Laporan</h2>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('laporan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_klien" class="form-label">Nama Klien</label>
                    <input type="text" class="form-control" id="nama_klien" name="nama_klien" required>
                </div>
                <div class="mb-3">
                    <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
                </div>
                <div class="mb-3">
                    <label for="kode_order" class="form-label">Kode Order</label>
                    <input type="text" class="form-control" id="kode_order" name="kode_order" required>
                </div>
                <div class="mb-3">
                    <label for="masalah" class="form-label">Tulis Masalahmu Di Sini</label>
                    <textarea class="form-control" id="masalah" name="masalah" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Laporkan</button>
                <button type="button" class="btn btn-danger w-100 mt-2">BlackList</button>
            </form>
        </div>
    </div>
</div>
@endsection