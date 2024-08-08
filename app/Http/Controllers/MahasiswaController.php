<?php
   // app/Http/Controllers/MahasiswaController.php
   // app/Http/Controllers/MahasiswaController.php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Models\Mahasiswa; // Sesuaikan dengan model yang Anda gunakan
   use Illuminate\Support\Facades\Hash;

   class MahasiswaController extends Controller
   {
       public function register(Request $request)
       {
           // Validasi data
           $request->validate([
               'name' => 'required|string|max:255',
               'email' => 'required|string|email|max:255|unique:mahasiswas',
               'asal_kampus' => 'required|string|max:255',
               'nomer_hp' => 'required|string|max:15',
               'password' => 'required|string|min:8|confirmed',
           ]);

           // Buat pengguna baru
           $mahasiswa = Mahasiswa::create([
               'name' => $request->name,
               'email' => $request->email,
               'asal_kampus' => $request->asal_kampus,
               'nomer_hp' => $request->nomer_hp,
               'password' => Hash::make($request->password),
           ]);

           // Redirect atau lakukan tindakan lain
           return redirect()->route('mahasiswa.daftar')->with('success', 'Pendaftaran berhasil!');
       }
   }