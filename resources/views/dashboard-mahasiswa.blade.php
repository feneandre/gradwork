@extends('layout')

@section('title', 'Dashboard Mahasiswa')

@section('content')
<div class="container mt-5">
    <h1 class="text-start mb-4" style="font-size: 1.25rem;">Halo {{ Auth::user()->name }}!</h1>

    <!-- Project dan Pembayaran Section -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0" style="font-size: 1.25rem;">Project dan Pembayaran</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama Klien</th>
                            <th>Status Project</th>
                            <th>Status Pembayaran</th>
                            <th>Input Project/Bukti</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project->nama_klien }}</td>
                            <td>
                                @if($project->status == 'Belum Dikerjakan')
                                <span class="badge bg-danger">{{ $project->status }}</span>
                                @else
                                <span class="badge bg-success">{{ $project->status }}</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-success">Sudah Dibayar</span>
                            </td>
                            <td>
                                <form action="{{ route('project.updateStatus', $project->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="file" class="form-control form-control-sm" name="bukti_project" required>
                            </td>
                            <td>
                                    <button type="submit" class="btn btn-primary btn-sm">Konfirmasi</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tawaran Pekerjaan Section -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0" style="font-size: 1.25rem;">Tawaran Pekerjaan</h2>
        </div>
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 1rem;">Pekerjaan 1</h5>
                    <p class="card-text" style="font-size: 0.875rem;">Deskripsi singkat tentang pekerjaan 1.</p>
                    <a href="#" class="btn btn-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 1rem;">Pekerjaan 2</h5>
                    <p class="card-text" style="font-size: 0.875rem;">Deskripsi singkat tentang pekerjaan 2.</p>
                    <a href="#" class="btn btn-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection