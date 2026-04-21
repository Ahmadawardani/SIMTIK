@extends('layouts.public')
@section('title', 'Galeri - SIMTIK POLDA DIY')

@section('content')
<section class="hero" style="padding:50px 20px;">
    <div style="max-width:1200px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h1 style="font-size:2rem;font-weight:900;">Galeri Kegiatan</h1>
        <p style="opacity:0.9;margin-top:8px;">Dokumentasi kegiatan Bidang TIK POLDA DIY</p>
    </div>
</section>

<section class="section">
    <div class="gallery-grid">
        <div class="gallery-item">
            <div style="width:100%;height:100%;background:linear-gradient(135deg, #1a3a8a, #2563eb);display:flex;align-items:center;justify-content:center;flex-direction:column;color:#fff;gap:12px;">
                <i class="fas fa-network-wired" style="font-size:3rem;"></i>
                <span style="font-weight:600;">Pemasangan Jaringan</span>
            </div>
        </div>
        <div class="gallery-item">
            <div style="width:100%;height:100%;background:linear-gradient(135deg, #0D1B4C, #1a3a8a);display:flex;align-items:center;justify-content:center;flex-direction:column;color:#fff;gap:12px;">
                <i class="fas fa-chalkboard-teacher" style="font-size:3rem;"></i>
                <span style="font-weight:600;">Pelatihan TIK</span>
            </div>
        </div>
        <div class="gallery-item">
            <div style="width:100%;height:100%;background:linear-gradient(135deg, #2563eb, #3b82f6);display:flex;align-items:center;justify-content:center;flex-direction:column;color:#fff;gap:12px;">
                <i class="fas fa-server" style="font-size:3rem;"></i>
                <span style="font-weight:600;">Data Center</span>
            </div>
        </div>
        <div class="gallery-item">
            <div style="width:100%;height:100%;background:linear-gradient(135deg, #1e40af, #60a5fa);display:flex;align-items:center;justify-content:center;flex-direction:column;color:#fff;gap:12px;">
                <i class="fas fa-satellite-dish" style="font-size:3rem;"></i>
                <span style="font-weight:600;">Instalasi Perangkat</span>
            </div>
        </div>
        <div class="gallery-item">
            <div style="width:100%;height:100%;background:linear-gradient(135deg, #0D1B4C, #2563eb);display:flex;align-items:center;justify-content:center;flex-direction:column;color:#fff;gap:12px;">
                <i class="fas fa-users" style="font-size:3rem;"></i>
                <span style="font-weight:600;">Rapat Koordinasi</span>
            </div>
        </div>
        <div class="gallery-item">
            <div style="width:100%;height:100%;background:linear-gradient(135deg, #1a3a8a, #3b82f6);display:flex;align-items:center;justify-content:center;flex-direction:column;color:#fff;gap:12px;">
                <i class="fas fa-shield-alt" style="font-size:3rem;"></i>
                <span style="font-weight:600;">Keamanan Siber</span>
            </div>
        </div>
    </div>
</section>
@endsection
