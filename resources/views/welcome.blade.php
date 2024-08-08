@extends('layout')

@section('title', 'Selamat Datang di GradWork')

@section('additional_styles')
<style>
    .hero {
        background: linear-gradient(90deg, rgba(0,123,255,1) 0%, rgba(72,202,228,1) 100%);
        color: white;
        padding: 90px 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .hero img {
        max-width: 100%;
        border-radius: 15px;
        margin-bottom: 30px;
    }
    .hero h1 {
        font-size: 2.0rem;
        margin-bottom: 20px; 
        color: yellow;
        font-weight: bold;
        text-align: center;
    }
    .hero h1 span {
        font-weight: bold;
        display: block;
        text-align: center;
    }
    .hero p {
        font-size: 1.2rem;
        margin-bottom: 30px; 
        text-align: center;
    }
    .partners {
        padding: 50px 0;
        text-align: center;
        background-color: #052055;
        color: white;
        font-weight:bold;
    }
    .partners h2 {
        margin-bottom: 30px;
        font-weight: bold;
    }
    .partner-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        color: white;
    }
    .partner-logo svg {
        width: 24px; 
    }
    .partner-logo-text {
        color: white; 
    }
    .partner-logos {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }
    .join-us, .find-worker {
        padding: 50px 0;
    }
    .join-us img, .find-worker img {
        width: 100%;
        max-width: 350px;
        border-radius: 15px;
    }
    .join-us .text-container, .find-worker .text-container {
        text-align: center;
    }
    .join-us .text-container h2, .find-worker .text-container h2 {
        font-weight: bold;
    }
    .join-us .btn, .find-worker .btn {
        display: block;
        width: 100%;
        max-width: 200px;
        margin: 20px auto 0;
        border-radius: 50px; /* Membuat button menjadi rounded */
    }
    .testimonials {
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: center;
    }
    .testimonials h2 {
        font-weight: bold;
    }
    .testimonial-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 10px;
    }
    .testimonial {
        width: 200px;
        text-align: center;
        flex: 0 0 auto;
    }
    .testimonial img {
        width: 100%;
        border-radius: 50%;
        margin-bottom: 10px;
    }
    .stars {
        color: #ffc107;
    }
    .faq {
        background-color: #e9ecef;
        padding: 50px 0;
        text-align: center;
    }
    .faq h2 {
        font-weight: bold;
        margin-bottom: 30px;
    }
    .faq-item {
        text-align: left;
        margin-bottom: 20px;
    }
    .faq-item h3 {
        font-weight: bold;
    }
    .faq-item p {
        margin-top: 10px;
    }
</style>
@endsection

@section('content')
    <section class="hero d-flex flex-column align-items-center">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div>
                        <h1>Hi! Selamat Datang di GradWork</h1>
                        <p>GradWork adalah platform yang menghubungkan mahasiswa/i terbaik dengan perusahaan yang membutuhkan tenaga kerja berkualitas. Kami menyediakan berbagai peluang kerja bagi mahasiswa/i di Kota Cirebon dan membantu perusahaan menemukan kandidat yang tepat.</p>
                        <div class="d-flex justify-content-center align-items-center flex-wrap">
                        <a href="{{ route('mahasiswa.daftar') }}" class="btn btn-primary me-2 mb-2">Daftar sebagai Mahasiswa</a>
                        <a href="{{ route('klien.daftar') }}" class="btn btn-secondary me-2 mb-2" style="border-radius: 0;">Daftar sebagai Klien</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/images/gambar1.png') }}" alt="Welcome Image" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </section>

    <section class="partners text-center">
        <div class="container">
            <h2>Partner Kami</h2>
            <div class="partner-logos d-flex justify-content-center flex-wrap">
                <div class="partner-logo mx-3">
                    <i data-feather="smile" class="icon-smile"></i>
                    <span class="partner-logo-text">Universitas A</span>
                </div>
                <div class="partner-logo mx-3">
                    <i data-feather="smile" class="icon-smile"></i>
                    <span class="partner-logo-text">Perusahaan B</span>
                </div>
                <div class="partner-logo mx-3">
                    <i data-feather="smile" class="icon-smile"></i>
                    <span class="partner-logo-text">Universitas C</span>
                </div>
            </div>
        </div>
    </section>

    <section class="join-us text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/images/gambar2.jpg') }}" alt="Person Image">
                </div>
                <div class="col-md-6 text-container">
                    <h2>Bergabunglah dengan Kami!</h2>
                    <p>Jadilah bagian dari komunitas GradWork dan temukan berbagai peluang kerja yang sesuai dengan keahlian Anda. Daftar sekarang dan mulailah perjalanan karir Anda bersama kami.</p>
                    <a href="#" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="find-worker text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-container">
                    <h2>Temukan Pekerja Profesional</h2>
                    <p>GradWork membantu perusahaan menemukan pekerja profesional dari kalangan mahasiswa/i terbaik. Cari dan temukan kandidat yang sesuai dengan kebutuhan perusahaan Anda.</p>
                    <a href="#"class="btn btn-primary">Cari</a>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/images/gambar3.jpg') }}" alt="Person Image">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials text-center">
        <div class="container">
            <h2>Testimoni Pengguna GradWork</h2>
            <div class="testimonial-list d-flex justify-content-center flex-wrap">
                <div class="testimonial">
                    <img src="{{ asset('asset/images/1.jpeg') }}"alt="Person Image">
                    <h3>Sahbana</h3>
                    <p>"GradWork sangat membantu saya dalam menemukan pekerjaan yang sesuai dengan keahlian saya. Prosesnya cepat dan mudah."</p>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('asset/images/2.jpeg') }}" alt="Person Image">
                    <h3>Victoria</h3>
                    <p>"Saya berhasil mendapatkan pekerjaan impian saya melalui GradWork. Terima kasih GradWork!"</p>
                    <div class="stars">★★★★☆</div>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('asset/images/3.jpeg') }}" alt="Person Image">
                    <h3>Hanabi</h3>
                    <p>"GradWork memudahkan saya dalam mencari pekerjaan paruh waktu yang sesuai dengan jadwal kuliah saya."</p>
                    <div class="stars">★★★★☆</div>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('asset/images/4.jpeg') }}" alt="Person Image">
                    <h3>Alucard</h3>
                    <p>"Platform yang sangat berguna bagi mahasiswa yang ingin mencari pengalaman kerja."</p>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('asset/images/5.jpeg') }}" alt="Person Image">
                    <h3>Angela</h3>
                    <p>"GradWork membantu saya menemukan pekerja yang tepat untuk proyek saya. Sangat direkomendasikan!"</p>
                    <div class="stars">★★★★☆</div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq text-center">
        <div class="container">
            <h2>FAQ</h2>
            <div class="faq-item">
                <h3>Apa itu GradWork?</h3>
                <p>GradWork adalah platform yang menghubungkan mahasiswa/i terbaik dengan perusahaan yang membutuhkan tenaga kerja berkualitas.</p>
            </div>
            <div class="faq-item">
                <h3>Bagaimana cara mendaftar di GradWork?</h3>
                <p>Anda dapat mendaftar sebagai mahasiswa atau klien dengan mengklik tombol "Daftar" di halaman utama.</p>
            </div>
            <div class="faq-item">
                <h3>Apakah layanan GradWork berbayar?</h3>
                <p>GradWork menyediakan layanan gratis untuk mahasiswa. Untuk perusahaan, terdapat beberapa paket berlangganan yang dapat dipilih sesuai kebutuhan.</p>
            </div>
        </div>
    </section>
@endsection
