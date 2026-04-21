@extends('layouts.public')
@section('title', 'Beranda - SIMTIK POLDA DIY')

@section('content')
<!-- Hero -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Sistem Informasi Bidang TIK POLDA DIY</h1>
            <p>Bidang Teknologi Informasi dan Komunikasi Kepolisian Daerah Daerah Istimewa Yogyakarta. Mendukung modernisasi kepolisian melalui pemanfaatan teknologi informasi yang handal dan terintegrasi.</p>
            <div style="display:flex;gap:12px;">
                <a href="{{ route('layanan') }}" class="btn btn-white">Lihat Layanan</a>
                <a href="{{ route('profil') }}" class="btn btn-outline" style="border-color:rgba(255,255,255,0.5);color:#fff;">Tentang Kami</a>
            </div>
        </div>
        <div class="hero-logos">
            <div style="text-align:center;">
                <div style="font-size:5rem;">🛡️</div>
                <p style="font-size:0.8rem;margin-top:8px;opacity:0.8;">POLDA DIY</p>
            </div>
            <div style="text-align:center;">
                <div style="font-size:5rem;">⚙️</div>
                <p style="font-size:0.8rem;margin-top:8px;opacity:0.8;">TIK POLRI</p>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi -->
<section class="section visi-misi">
    <div class="section-title">
        <h2>Visi & Misi</h2>
        <p>Komitmen kami dalam mendukung tugas kepolisian melalui teknologi</p>
        <div class="underline"></div>
    </div>
    <div class="visi-misi-grid">
        <div class="visi-misi-card">
            <h3>🎯 Visi</h3>
            <p>Menjadi Bidang TIK yang profesional, modern, dan terpercaya dalam mendukung tugas-tugas kepolisian di wilayah Daerah Istimewa Yogyakarta melalui penerapan teknologi informasi dan komunikasi yang inovatif.</p>
        </div>
        <div class="visi-misi-card">
            <h3>🚀 Misi</h3>
            <ul>
                <li>Mengembangkan infrastruktur TIK yang handal dan terintegrasi</li>
                <li>Meningkatkan kompetensi SDM di bidang teknologi informasi</li>
                <li>Memberikan pelayanan TIK yang prima kepada seluruh satuan kerja</li>
                <li>Mendukung pengambilan keputusan berbasis data dan teknologi</li>
                <li>Menjaga keamanan informasi dan sistem elektronik kepolisian</li>
            </ul>
        </div>
    </div>
</section>

<!-- Layanan -->
<section class="section" style="background:var(--gray-100);">
    <div class="section-title">
        <h2>Layanan Kami</h2>
        <p>Layanan teknologi informasi dan komunikasi untuk mendukung kinerja kepolisian</p>
        <div class="underline"></div>
    </div>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-network-wired"></i></div>
            <h3>Infrastruktur Jaringan</h3>
            <p>Pengelolaan dan pemeliharaan jaringan komunikasi data di seluruh jajaran POLDA DIY.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-laptop-code"></i></div>
            <h3>Pengembangan Aplikasi</h3>
            <p>Pengembangan sistem informasi dan aplikasi untuk mendukung operasional kepolisian.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
            <h3>Keamanan Siber</h3>
            <p>Pengamanan sistem informasi dan jaringan dari ancaman siber.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-broadcast-tower"></i></div>
            <h3>Komunikasi Radio</h3>
            <p>Pengelolaan sistem komunikasi radio untuk operasional kepolisian.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-database"></i></div>
            <h3>Pengelolaan Data</h3>
            <p>Manajemen basis data dan informasi kepolisian yang terintegrasi.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-headset"></i></div>
            <h3>Dukungan Teknis</h3>
            <p>Layanan bantuan teknis untuk perangkat dan sistem TIK di seluruh satuan kerja.</p>
        </div>
    </div>
</section>

<!-- Berita Terbaru -->
<section class="section" style="background:var(--white);">
    <div class="section-title">
        <h2>Berita Terbaru</h2>
        <p>Kabar terkini dari Bidang TIK POLDA DIY</p>
        <div class="underline"></div>
    </div>
    <div class="cards-grid">
        @forelse($beritas as $berita)
        <a href="{{ route('berita.detail', $berita->id) }}" class="card">
            @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="card-img">
            @else
                <div class="card-img" style="background:linear-gradient(135deg, var(--primary), var(--primary-600));display:flex;align-items:center;justify-content:center;color:#fff;font-size:2rem;">
                    <i class="fas fa-newspaper"></i>
                </div>
            @endif
            <div class="card-body">
                <h3>{{ $berita->judul }}</h3>
                <p>{{ Str::limit(strip_tags($berita->isi), 100) }}</p>
                <div class="card-meta">
                    <span><i class="fas fa-calendar"></i> {{ $berita->tanggal->format('d M Y') }}</span>
                    <span><i class="fas fa-tag"></i> {{ $berita->jenis }}</span>
                </div>
            </div>
        </a>
        @empty
        <div style="grid-column:1/-1;text-align:center;padding:60px 20px;color:var(--gray-400);">
            <i class="fas fa-newspaper" style="font-size:3rem;margin-bottom:16px;display:block;"></i>
            <p>Belum ada berita yang dipublikasikan.</p>
        </div>
        @endforelse
    </div>
    @if($beritas->count() > 0)
    <div style="text-align:center;margin-top:30px;">
        <a href="{{ route('berita') }}" class="btn btn-primary">Lihat Semua Berita <i class="fas fa-arrow-right"></i></a>
    </div>
    @endif
</section>
@endsection
