   <!-- resources/views/daftar-klien.blade.php -->
   @extends('layout')

   @section('title', 'Daftar Sebagai Klien')

   @section('content')
   <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
       <div class="card p-4" style="width: 100%; max-width: 500px;">
           <h2 class="text-center mb-4">Daftar Sebagai Klien</h2>
           <form action="{{ route('klien.register') }}" method="POST">
               @csrf
               <div class="mb-3">
                   <label for="name" class="form-label">Nama</label>
                   <input type="text" class="form-control" id="name" name="name" required>
               </div>
               <div class="mb-3">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" class="form-control" id="email" name="email" required>
               </div>
               <div class="mb-3">
                   <label for="password" class="form-label">Password</label>
                   <input type="password" class="form-control" id="password" name="password" required>
               </div>
               <div class="mb-3">
                   <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                   <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
               </div>
               <div class="mb-3 form-check">
                   <input type="checkbox" class="form-check-input" id="terms" required>
                   <label class="form-check-label" for="terms">Saya telah menyetujui segala aturan GradeWork</label>
               </div>
               <button type="submit" class="btn btn-primary w-100">Daftar</button>
           </form>
           <p class="text-center mt-3">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
       </div>
   </div>
   @endsection