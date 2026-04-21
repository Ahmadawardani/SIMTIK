@extends('layouts.public')
@section('title', 'Berita - SIMTIK POLDA DIY')

@section('content')
<section class="hero" style="padding:50px 20px;">
    <div style="max-width:1200px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h1 style="font-size:2rem;font-weight:900;">Berita & Informasi</h1>
        <p style="opacity:0.9;margin-top:8px;">Kabar terkini dari Bidang TIK POLDA DIY</p>
    </div>
</section>

<section class="section">
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
                <p>{{ Str::limit(strip_tags($berita->isi), 120) }}</p>
                <div class="card-meta">
                    <span><i class="fas fa-calendar"></i> {{ $berita->tanggal->format('d M Y') }}</span>
                    <span><i class="fas fa-tag"></i> {{ $berita->jenis }}</span>
                </div>
            </div>
        </a>
        @empty
        <div style="grid-column:1/-1;text-align:center;padding:80px 20px;color:var(--gray-400);">
            <i class="fas fa-newspaper" style="font-size:4rem;margin-bottom:16px;display:block;"></i>
            <p style="font-size:1.1rem;">Belum ada berita yang dipublikasikan.</p>
        </div>
        @endforelse
    </div>
    <div style="margin-top:30px;">
        {{ $beritas->links() }}
    </div>
</section>
@endsection
