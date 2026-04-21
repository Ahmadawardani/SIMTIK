@extends('layouts.public')
@section('title', 'Profil - SIMTIK POLDA DIY')

@section('content')
<section class="hero" style="padding:50px 20px;">
    <div style="max-width:1200px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h1 style="font-size:2rem;font-weight:900;">Profil Bidang TIK POLDA DIY</h1>
        <p style="opacity:0.9;margin-top:8px;">Mengenal lebih dekat Bidang Teknologi Informasi dan Komunikasi</p>
    </div>
</section>

<section class="section profil-section">
    <div class="container">
        <div style="max-width:800px;margin:0 auto 50px;">
            <h2 style="font-size:1.5rem;color:var(--primary);margin-bottom:16px;">Tentang Bidang TIK</h2>
            <p style="color:var(--gray-500);line-height:1.8;margin-bottom:16px;">
                Bidang Teknologi Informasi dan Komunikasi (Bid TIK) POLDA DIY merupakan unsur pelaksana tugas pokok yang berada di bawah Kapolda DIY. Bidang TIK bertugas menyelenggarakan kegiatan pelayanan teknologi informasi dan komunikasi yang meliputi pengembangan sistem informasi, pengelolaan infrastruktur jaringan, serta pelayanan teknis di bidang teknologi informasi dan komunikasi.
            </p>
            <p style="color:var(--gray-500);line-height:1.8;">
                Dalam melaksanakan tugasnya, Bidang TIK menyelenggarakan fungsi pembinaan, pengembangan, dan pengelolaan teknologi informasi dan komunikasi guna mendukung tugas-tugas kepolisian di wilayah Daerah Istimewa Yogyakarta.
            </p>
        </div>

        <div class="section-title">
            <h2>Struktur Organisasi</h2>
            <p>Pejabat dan personel Bidang TIK POLDA DIY</p>
            <div class="underline"></div>
        </div>

        <div class="struktur-grid">
            <div class="struktur-card">
                <div class="avatar">KA</div>
                <h4>Kabid TIK</h4>
                <p>Kepala Bidang TIK</p>
            </div>
            <div class="struktur-card">
                <div class="avatar">S1</div>
                <h4>Kasubbid Tekinfo</h4>
                <p>Kepala Sub Bidang Teknologi Informasi</p>
            </div>
            <div class="struktur-card">
                <div class="avatar">S2</div>
                <h4>Kasubbid Telkom</h4>
                <p>Kepala Sub Bidang Telekomunikasi</p>
            </div>
            <div class="struktur-card">
                <div class="avatar">S3</div>
                <h4>Kasubbid Data</h4>
                <p>Kepala Sub Bidang Pengelolaan Data</p>
            </div>
        </div>
    </div>
</section>
@endsection
