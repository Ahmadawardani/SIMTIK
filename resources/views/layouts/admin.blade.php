<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - SIMTIK POLDA DIY</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h2>🛡️ BID TIK POLDA DIY</h2>
                <p>Panel Administrasi</p>
            </div>
            <ul class="sidebar-nav">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.anggota.index') }}" class="{{ request()->routeIs('admin.anggota.*') ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-users"></i></span> Anggota
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.surat.index') }}" class="{{ request()->routeIs('admin.surat.*') ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-envelope"></i></span> Persuratan
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.keuangan.index') }}" class="{{ request()->routeIs('admin.keuangan.*') ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-wallet"></i></span> Keuangan
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.informasi.index') }}" class="{{ request()->routeIs('admin.informasi.*') ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-info-circle"></i></span> Informasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.berita.index') }}" class="{{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-newspaper"></i></span> Berita
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger" style="width:100%;justify-content:center;">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="admin-main">
            <div class="admin-topbar">
                <div style="display:flex;align-items:center;gap:12px;">
                    <button class="navbar-toggle" onclick="document.getElementById('sidebar').classList.toggle('open')" style="display:none;">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1>@yield('page-title', 'Dashboard')</h1>
                </div>
                <div class="user-info">
                    <i class="fas fa-user-circle" style="font-size:1.5rem;"></i>
                    <span>{{ Auth::user()->name ?? 'Admin' }}</span>
                </div>
            </div>
            <div class="admin-content">
                @if(session('success'))
                    <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> {{ session('error') }}</div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
    <script>
        // Mobile sidebar toggle
        const mql = window.matchMedia('(max-width: 768px)');
        if (mql.matches) {
            document.querySelector('.navbar-toggle').style.display = 'block';
        }
    </script>
</body>
</html>
