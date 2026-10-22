<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Matcha Muse Gallery')</title>

    <!-- Memuat Bootstrap CSS lokal (Tanpa CDN) -->
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <!-- CSS Custom Minimalis untuk Tema Pastel Matcha & Strawberry -->
    <style>
        body {
            background-color: #FFF9F1;
            /* Warna Cream sebagai latar belakang utama */
            color: #2c3e50;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar dengan nuansa Matcha Green */
        .navbar-matcha {
            background-color: #DCE8D5 !important;
            border-bottom: 1px solid #c9dbbe;
        }

        .navbar-brand {
            font-weight: 700;
            color: #2f4f2f !important;
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: #3b533b !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #1f331f !important;
        }

        /* Tombol dengan aksen Strawberry Pink */
        .btn-strawberry {
            background-color: #F5CCD5;
            border-color: #e8b6c2;
            color: #5c2833;
            font-weight: 600;
            transition: all 0.2s ease-in-out;
        }

        .btn-strawberry:hover {
            background-color: #e8b6c2;
            border-color: #d69fae;
            color: #4a2028;
        }

        /* Footer sederhana */
        footer {
            background-color: #FFFFFF;
            border-top: 1px solid #eae5df;
            color: #6c757d;
            font-size: 0.9rem;
            margin-top: auto;
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-matcha shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('artworks.index') }}">
                🌿 Matcha Muse Gallery
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('artworks.*') ? 'active fw-bold' : '' }}" href="{{ route('artworks.index') }}">Koleksi Karya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama Halaman -->
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-4 text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} <strong>Matcha Muse Gallery</strong>. Tugas UTS Laravel Sistem Informasi — NIM: 251011700828.</p>
        </div>
    </footer>

    <!-- Memuat Bootstrap JS Bundle lokal (Tanpa CDN) -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')
</body>

</html>