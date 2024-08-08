<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_klien' => 'required|string|max:255',
            'nama_mahasiswa' => 'required|string|max:255',
            'kode_order' => 'required|string|max:255',
            'masalah' => 'required|string',
        ]);

        // Simpan data laporan ke dalam tabel laporans
        Laporan::create([
            'nama_klien' => $request->input('nama_klien'),
            'nama_mahasiswa' => $request->input('nama_mahasiswa'),
            'kode_order' => $request->input('kode_order'),
            'masalah' => $request->input('masalah'),
        ]);

        // Redirect ke halaman sukses atau halaman lain
        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }
}