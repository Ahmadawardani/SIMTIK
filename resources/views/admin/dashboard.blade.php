@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon blue"><i class="fas fa-users"></i></div>
        <div class="stat-info">
            <h3>{{ $stats['anggota'] }}</h3>
            <p>Total Anggota</p>
        </div>
    </div>
    <div class="stat-card" style="border-left-color:var(--success);">
        <div class="stat-icon green"><i class="fas fa-envelope"></i></div>
        <div class="stat-info">
            <h3>{{ $stats['persuratan'] }}</h3>
            <p>Total Surat</p>
        </div>
    </div>
    <div class="stat-card" style="border-left-color:var(--warning);">
        <div class="stat-icon yellow"><i class="fas fa-wallet"></i></div>
        <div class="stat-info">
            <h3>{{ $stats['keuangan'] }}</h3>
            <p>Transaksi Keuangan</p>
        </div>
    </div>
    <div class="stat-card" style="border-left-color:var(--info);">
        <div class="stat-icon blue"><i class="fas fa-info-circle"></i></div>
        <div class="stat-info">
            <h3>{{ $stats['informasi'] }}</h3>
            <p>Total Informasi</p>
        </div>
    </div>
    <div class="stat-card" style="border-left-color:var(--danger);">
        <div class="stat-icon red"><i class="fas fa-newspaper"></i></div>
        <div class="stat-info">
            <h3>{{ $stats['berita'] }}</h3>
            <p>Total Berita</p>
        </div>
    </div>
</div>

<div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;">
    <!-- Surat Terbaru -->
    <div class="table-card">
        <div class="table-header">
            <h2><i class="fas fa-envelope" style="color:var(--primary);"></i> Surat Terbaru</h2>
            <a href="{{ route('admin.surat.index') }}" class="btn btn-sm btn-outline">Lihat Semua</a>
        </div>
        <table class="data-table">
            <thead>
                <tr><th>No. Surat</th><th>Perihal</th><th>Tipe</th></tr>
            </thead>
            <tbody>
                @forelse($suratTerbaru as $surat)
                <tr>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ Str::limit($surat->perihal, 30) }}</td>
                    <td><span class="badge {{ $surat->tipe == 'masuk' ? 'badge-success' : 'badge-info' }}">{{ ucfirst($surat->tipe) }}</span></td>
                </tr>
                @empty
                <tr><td colspan="3" style="text-align:center;color:var(--gray-400);padding:30px;">Belum ada data surat</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Keuangan Terbaru -->
    <div class="table-card">
        <div class="table-header">
            <h2><i class="fas fa-wallet" style="color:var(--warning);"></i> Transaksi Terbaru</h2>
            <a href="{{ route('admin.keuangan.index') }}" class="btn btn-sm btn-outline">Lihat Semua</a>
        </div>
        <table class="data-table">
            <thead>
                <tr><th>Uraian</th><th>Nilai</th><th>Status</th></tr>
            </thead>
            <tbody>
                @forelse($keuanganTerbaru as $k)
                <tr>
                    <td>{{ Str::limit($k->uraian_kegiatan, 30) }}</td>
                    <td>Rp {{ number_format($k->nilai, 0, ',', '.') }}</td>
                    <td>
                        <span class="badge {{ $k->status == 'selesai' ? 'badge-success' : ($k->status == 'proses' ? 'badge-warning' : 'badge-danger') }}">
                            {{ ucfirst($k->status) }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr><td colspan="3" style="text-align:center;color:var(--gray-400);padding:30px;">Belum ada transaksi</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
