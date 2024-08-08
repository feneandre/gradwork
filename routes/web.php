<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Dashboard routes
Route::get('/dashboard/klien', function () {
    return view('dashboard-klien');
})->middleware('auth:klien')->name('klien.dashboard');

Route::get('/dashboard/mahasiswa', function () {
    $projects = App\Models\Project::all();
    $pembayarans = App\Models\Pembayaran::all();
    return view('dashboard-mahasiswa', compact('projects', 'pembayarans'));
})->middleware('auth:mahasiswa')->name('mahasiswa.dashboard');

// Mahasiswa routes
Route::get('/daftar-mahasiswa', function () {
    return view('daftar-mahasiswa');
})->name('mahasiswa.daftar');

Route::post('/daftar-mahasiswa', [MahasiswaController::class, 'register'])->name('mahasiswa.register');

// Klien routes
Route::get('/daftar-klien', function () {
    return view('daftar-klien');
})->name('klien.daftar');

Route::post('/daftar-klien', [KlienController::class, 'register'])->name('klien.register');

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Pembayaran routes
Route::get('/pembayaran/form', function (Request $request) {
    return view('form-pembayaran', ['tarif' => $request->query('tarif')]);
})->name('pembayaran.form');

Route::post('/pembayaran/submit', [PembayaranController::class, 'submit'])->name('pembayaran.submit');

// Project routes
Route::put('/project/{id}/update-status', [ProjectController::class, 'updateStatus'])->name('project.updateStatus');

// Laporan routes
Route::get('/laporan/form', function () {
    return view('form-laporan');
})->name('laporan.form');

Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');