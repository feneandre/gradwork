@extends('layout')

@section('title', 'Login Mahasiswa')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4" style="width: 100%; max-width: 500px;">
        <h2 class="text-center mb-4">Login Mahasiswa</h2>
        <form action="{{ route('mahasiswa.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p class="text-center mt-3">Belum punya akun? <a href="{{ route('mahasiswa.daftar') }}">Daftar</a></p>
    </div>
</div>
@endsection