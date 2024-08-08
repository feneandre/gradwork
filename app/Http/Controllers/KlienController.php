<?php

   // app/Http/Controllers/KlienController.php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Models\Klien; // Sesuaikan dengan model yang Anda gunakan
   use Illuminate\Support\Facades\Hash;

   class KlienController extends Controller
   {
       public function register(Request $request)
       {
           // Validasi data
           $request->validate([
               'name' => 'required|string|max:255',
               'email' => 'required|string|email|max:255|unique:kliens',
               'password' => 'required|string|min:8|confirmed',
           ]);

           // Buat pengguna baru
           $klien = Klien::create([
               'name' => $request->name,
               'email' => $request->email,
               'password' => Hash::make($request->password),
           ]);

           // Redirect atau lakukan tindakan lain
           return redirect()->route('klien.daftar')->with('success', 'Pendaftaran berhasil!');
       }
   }
