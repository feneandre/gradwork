<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Klien;
use App\Models\Mahasiswa;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Coba untuk login sebagai klien
        if (Auth::guard('klien')->attempt($request->only('email', 'password'))) {
            // Redirect ke halaman dashboard klien setelah login
            return redirect()->intended('/dashboard/klien');
        }

        // Coba untuk login sebagai mahasiswa
        if (Auth::guard('mahasiswa')->attempt($request->only('email', 'password'))) {
            // Redirect ke halaman dashboard mahasiswa setelah login
            return redirect()->intended('/dashboard/mahasiswa');
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        if (Auth::guard('klien')->check()) {
            Auth::guard('klien')->logout();
        } elseif (Auth::guard('mahasiswa')->check()) {
            Auth::guard('mahasiswa')->logout();
        }

        return redirect()->route('login');
    }
}