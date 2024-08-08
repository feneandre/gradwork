@extends('layout')

@section('title', 'Dashboard Klien')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">HALO SAHBANA!</h1>

    <!-- Cari Pekerja Section -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Cari Pekerja</h2>
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Desainer</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>UI/UX</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>HRD</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Data Entry</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Programer</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Guru Privat</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Akuntan</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Data Analis</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Lebih Banyak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rekomendasi Pekerja Section -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Rekomendasi Pekerja</h2>
        </div>
        <div class="card-body">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">Saber Roam <span class="badge bg-warning text-dark">4.9</span></h5>
                            <p class="card-text">Guru Privat<br>Universitas ABCD</p>
                            <p class="card-text"><small class="text-muted">Pengalaman</small></p>
                            <p class="card-text">Mengajar di SD ABC<br>Mengajar di SMP ABC<br>Mengajar di SMA ABC</p>
                            <p class="card-text">Rp.100.000/Jam</p>
                            <a href="{{ route('pembayaran.form', ['tarif' => 100000]) }}" class="btn btn-primary">Order</a>
                            <a href="{{ route('laporan.form') }}" class="btn btn-danger">Laporkan</a>
                            <a href="#" class="btn btn-outline-secondary"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="btn btn-outline-secondary"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">Zilong Hyper <span class="badge bg-warning text-dark">4.7</span></h5>
                            <p class="card-text">HRD<br>Universitas ABCD</p>
                            <p class="card-text"><small class="text-muted">Pengalaman</small></p>
                            <p class="card-text">Mengajar di SD ABC<br>Mengajar di SMP ABC<br>Mengajar di SMA ABC</p>
                            <p class="card-text">Rp.100.000/Jam</p>
                            <a href="{{ route('pembayaran.form', ['tarif' => 100000]) }}" class="btn btn-primary">Order</a>
                            <a href="{{ route('laporan.form') }}" class="btn btn-danger">Laporkan</a>
                            <a href="#" class="btn btn-outline-secondary"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="btn btn-outline-secondary"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection