<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SIMTIK POLDA DIY - Sistem Informasi Bidang Teknologi Informasi dan Komunikasi Kepolisian Daerah Daerah Istimewa Yogyakarta">
    <title>@yield('title', 'SIMTIK POLDA DIY')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-inner">
            <a href="{{ route('beranda') }}" class="navbar-brand">
                <span>🛡️</span>
                <span>BID TIK POLDA DIY</span>
            </a>
            <button class="navbar-toggle" onclick="document.querySelector('.navbar-nav').classList.toggle('open')">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-nav">
                <li><a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">Profil</a></li>
                <li><a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a></li>
                <li><a href="{{ route('berita') }}" class="{{ request()->routeIs('berita*') ? 'active' : '' }}">Berita</a></li>
                <li><a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'active' : '' }}">Galeri</a></li>
                <li><a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a></li>
                <li><a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login Admin</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-grid">
            <div>
                <h4>🛡️ BID TIK POLDA DIY</h4>
                <p>Bidang Teknologi Informasi dan Komunikasi Kepolisian Daerah Daerah Istimewa Yogyakarta. Melayani dengan teknologi untuk keamanan dan ketertiban masyarakat.</p>
            </div>
            <div>
                <h4>Link Cepat</h4>
                <p><a href="{{ route('beranda') }}">Beranda</a></p>
                <p><a href="{{ route('profil') }}">Profil</a></p>
                <p><a href="{{ route('layanan') }}">Layanan</a></p>
                <p><a href="{{ route('berita') }}">Berita</a></p>
            </div>
            <div>
                <h4>Kontak</h4>
                <p>📍 Jl. Lingkar Utara, Condongcatur, Depok, Sleman, DIY</p>
                <p>📞 (0274) 588111</p>
                <p>📧 bidtik@poldadiy.go.id</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Bidang TIK POLDA DIY. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
