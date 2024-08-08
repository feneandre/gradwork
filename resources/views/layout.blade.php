<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GradWork')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        header {
            background: linear-gradient(90deg, rgba(0,123,255,1) 0%, rgba(72,202,228,1) 100%);
        }
        .navbar-brand {
            font-size: 20px;
            font-weight: bold;
        }
        .nav-link {
            font-size: 13px;
        }
        .nav-link.active {
            font-weight: bold;
            border-bottom: 2px solid white;
        }
        .btn-primary {
            background-color: #052055;
            border-color: #052055;
            color: white;
        }
        .btn-secondary {
            background-color: #052055;
            border-color: #052055;
            color: white;
        }
        .btn-primary:hover,
        .btn-secondary:hover {
            background-color: #366EDA;
            border-color: #6c757d;
        }
        footer {
            background-color: #052055;
            color: white;
            padding: 40px 0;
            text-align: center;
            width: 100%;
            margin-top: auto;
        }
        footer .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 20px;
        }
        footer .social-icons a:hover {
            color: #366EDA;
        }
        footer .footer-links a {
            color: white;
            margin: 0 15px;
            font-size: 14px;
            text-decoration: none;
        }
        footer .footer-links a:hover {
            text-decoration: underline;
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            border-radius: 20px;
        }
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 16px;
            }
            .nav-link {
                font-size: 11px;
            }
            .btn-primary, .btn-secondary {
                font-size: 12px;
            }
            footer .social-icons a {
                font-size: 16px;
            }
            footer .footer-links a {
                font-size: 12px;
            }
        }
    </style>
    @yield('additional_styles')
</head>
<body>
    <header class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                <img src="{{ asset('asset/images/logo.png') }}" alt="GradWork Logo" style="height: 60px; margin-right: 10px;">
                <span class="navbar-brand mb-0 h1">GradWork</span>
            </a>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link text-white active">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Project</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Pembayaran</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Chat</a></li>
            </ul>
        </div>
    </header>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="w-100 bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 GradWork. All rights reserved.</p>
            <div class="footer-links mt-3 d-flex justify-content-center">
                <a href="#" class="text-white mx-2">Privacy Policy</a>
                <a href="#" class="text-white mx-2">Terms of Service</a>
                <a href="#" class="text-white mx-2">Contact Us</a>
            </div>
            <div class="social-icons mt-3">
                <a href="#" class="text-white me-3"><i data-feather="facebook"></i></a>
                <a href="#" class="text-white me-3"><i data-feather="twitter"></i></a>
                <a href="#" class="text-white me-3"><i data-feather="instagram"></i></a>
                <a href="#" class="text-white"><i data-feather="linkedin"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace(); // Initialize Feather Icons
    </script>
    @yield('additional_scripts')
</body>
</html>