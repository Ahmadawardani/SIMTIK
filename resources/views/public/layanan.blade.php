@extends('layouts.public')
@section('title', 'Layanan - SIMTIK POLDA DIY')

@section('content')
<section class="hero" style="padding:50px 20px;">
    <div style="max-width:1200px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h1 style="font-size:2rem;font-weight:900;">Layanan Bidang TIK</h1>
        <p style="opacity:0.9;margin-top:8px;">Layanan teknologi informasi dan komunikasi untuk mendukung kinerja kepolisian</p>
    </div>
</section>

<section class="section">
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-network-wired"></i></div>
            <h3>Infrastruktur Jaringan</h3>
            <p>Pengelolaan jaringan LAN, WAN, dan internet di seluruh jajaran POLDA DIY termasuk Polres dan Polsek.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-laptop-code"></i></div>
            <h3>Pengembangan Aplikasi</h3>
            <p>Pengembangan dan pemeliharaan sistem informasi serta aplikasi pendukung operasional kepolisian.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
            <h3>Keamanan Siber</h3>
            <p>Monitoring dan pengamanan sistem informasi dari ancaman siber, termasuk forensik digital.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-broadcast-tower"></i></div>
            <h3>Komunikasi Radio</h3>
            <p>Pengelolaan dan pemeliharaan sistem komunikasi radio HF, VHF, dan UHF di seluruh jajaran.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-database"></i></div>
            <h3>Pengelolaan Data</h3>
            <p>Manajemen basis data kepolisian, data center, dan sistem informasi terintegrasi.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-headset"></i></div>
            <h3>Dukungan Teknis</h3>
            <p>Layanan helpdesk dan bantuan teknis untuk perangkat keras dan lunak di seluruh satuan kerja.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-video"></i></div>
            <h3>CCTV & Monitoring</h3>
            <p>Pengelolaan sistem CCTV dan monitoring visual untuk mendukung ketahanan kamtibmas.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-graduation-cap"></i></div>
            <h3>Pelatihan TIK</h3>
            <p>Penyelenggaraan pelatihan dan bimbingan teknis di bidang TIK bagi personel kepolisian.</p>
        </div>
    </div>
</section>
@endsection
