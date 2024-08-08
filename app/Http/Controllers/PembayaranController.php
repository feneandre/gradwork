<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran; // Pastikan model diimpor dengan benar

class PembayaranController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'waktu' => 'required|integer|min:1',
            'jumlah' => 'required|string',
            'jenis_pembayaran' => 'required|string',
        ]);

        // Simpan data pembayaran ke dalam tabel pembayarans
        Pembayaran::create([
            'nama_klien' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'waktu' => $request->input('waktu'),
            'jumlah' => $request->input('jumlah'),
            'jenis_pembayaran' => $request->input('jenis_pembayaran'),
            'status' => 'Sudah Dibayar', // Status setelah pembayaran
        ]);

        // Kembalikan respons JSON untuk notifikasi
        return response()->json(['success' => 'Pembayaran berhasil dilakukan.']);
    }
}