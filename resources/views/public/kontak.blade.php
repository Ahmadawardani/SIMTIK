@extends('layouts.public')
@section('title', 'Kontak - SIMTIK POLDA DIY')

@section('content')
<section class="hero" style="padding:50px 20px;">
    <div style="max-width:1200px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h1 style="font-size:2rem;font-weight:900;">Hubungi Kami</h1>
        <p style="opacity:0.9;margin-top:8px;">Jangan ragu untuk menghubungi Bidang TIK POLDA DIY</p>
    </div>
</section>

<section class="section">
    <div class="contact-grid">
        <div>
            <h2 style="font-size:1.3rem;color:var(--primary);margin-bottom:20px;">Informasi Kontak</h2>
            <div class="contact-info-card">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4 style="font-weight:700;margin-bottom:4px;">Alamat</h4>
                    <p style="color:var(--gray-500);font-size:0.9rem;">Jl. Lingkar Utara, Condongcatur, Depok, Sleman, Daerah Istimewa Yogyakarta 55281</p>
                </div>
            </div>
            <div class="contact-info-card">
                <div class="icon"><i class="fas fa-phone-alt"></i></div>
                <div>
                    <h4 style="font-weight:700;margin-bottom:4px;">Telepon</h4>
                    <p style="color:var(--gray-500);font-size:0.9rem;">(0274) 588111</p>
                </div>
            </div>
            <div class="contact-info-card">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <h4 style="font-weight:700;margin-bottom:4px;">Email</h4>
                    <p style="color:var(--gray-500);font-size:0.9rem;">bidtik@poldadiy.go.id</p>
                </div>
            </div>
            <div class="contact-info-card">
                <div class="icon"><i class="fas fa-clock"></i></div>
                <div>
                    <h4 style="font-weight:700;margin-bottom:4px;">Jam Operasional</h4>
                    <p style="color:var(--gray-500);font-size:0.9rem;">Senin - Jumat: 08.00 - 16.00 WIB<br>Sabtu: 08.00 - 12.00 WIB</p>
                </div>
            </div>
        </div>
        <div>
            <div style="background:var(--white);border-radius:var(--radius-lg);padding:30px;box-shadow:var(--shadow);">
                <h2 style="font-size:1.3rem;color:var(--primary);margin-bottom:20px;">Kirim Pesan</h2>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label>Subjek</label>
                    <input type="text" class="form-control" placeholder="Subjek pesan">
                </div>
                <div class="form-group">
                    <label>Pesan</label>
                    <textarea class="form-control" placeholder="Tulis pesan Anda..."></textarea>
                </div>
                <button class="btn btn-primary" style="width:100%;justify-content:center;">
                    <i class="fas fa-paper-plane"></i> Kirim Pesan
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
