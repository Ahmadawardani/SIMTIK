@extends('layouts.public')
@section('title', $berita->judul . ' - SIMTIK POLDA DIY')

@section('content')
<section class="section" style="background:var(--white);">
    <div class="container" style="max-width:800px;">
        <a href="{{ route('berita') }}" style="color:var(--primary);font-weight:600;display:inline-flex;align-items:center;gap:6px;margin-bottom:24px;">
            <i class="fas fa-arrow-left"></i> Kembali ke Berita
        </a>

        @if($berita->gambar)
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" style="width:100%;height:400px;object-fit:cover;border-radius:var(--radius-lg);margin-bottom:24px;">
        @endif

        <div class="card-meta" style="margin-bottom:16px;">
            <span><i class="fas fa-calendar"></i> {{ $berita->tanggal->format('d M Y') }}</span>
            <span class="badge badge-primary">{{ $berita->jenis }}</span>
        </div>

        <h1 style="font-size:2rem;font-weight:800;color:var(--dark);margin-bottom:20px;line-height:1.3;">{{ $berita->judul }}</h1>

        <div style="color:var(--dark-600);font-size:1rem;line-height:1.9;">
            {!! nl2br(e($berita->isi)) !!}
        </div>
    </div>
</section>

@if($beritaLainnya->count() > 0)
<section class="section" style="background:var(--gray-100);">
    <div class="section-title">
        <h2>Berita Lainnya</h2>
        <div class="underline"></div>
    </div>
    <div class="cards-grid">
        @foreach($beritaLainnya as $item)
        <a href="{{ route('berita.detail', $item->id) }}" class="card">
            @if($item->gambar)
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="card-img">
            @else
                <div class="card-img" style="background:linear-gradient(135deg, var(--primary), var(--primary-600));display:flex;align-items:center;justify-content:center;color:#fff;font-size:2rem;">
                    <i class="fas fa-newspaper"></i>
                </div>
            @endif
            <div class="card-body">
                <h3>{{ $item->judul }}</h3>
                <p>{{ Str::limit(strip_tags($item->isi), 80) }}</p>
                <div class="card-meta">
                    <span><i class="fas fa-calendar"></i> {{ $item->tanggal->format('d M Y') }}</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endif
@endsection
