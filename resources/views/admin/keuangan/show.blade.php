@extends('layouts.admin')
@section('title', 'Detail Transaksi')
@section('page-title', 'Detail Transaksi')

@section('content')
<div class="detail-card" style="max-width:700px;">
    <div class="detail-card-header"><i class="fas fa-wallet" style="font-size:1.3rem;"></i><h2>Detail Transaksi Keuangan</h2></div>
    <div class="detail-card-body">
        <div class="detail-row"><span class="detail-label">Tanggal</span><span class="detail-value">{{ $keuangan->tanggal->format('d M Y') }}</span></div>
        <div class="detail-row"><span class="detail-label">Uraian Kegiatan</span><span class="detail-value">{{ $keuangan->uraian_kegiatan }}</span></div>
        <div class="detail-row"><span class="detail-label">Jenis Belanja</span><span class="detail-value">{{ $keuangan->jenis_belanja }}</span></div>
        <div class="detail-row"><span class="detail-label">Kode MAK</span><span class="detail-value">{{ $keuangan->kode_mak }}</span></div>
        <div class="detail-row"><span class="detail-label">Nilai</span><span class="detail-value" style="font-weight:700;font-size:1.1rem;color:var(--primary);">Rp {{ number_format($keuangan->nilai, 0, ',', '.') }}</span></div>
        <div class="detail-row"><span class="detail-label">Status</span><span class="detail-value"><span class="badge {{ $keuangan->status == 'selesai' ? 'badge-success' : ($keuangan->status == 'proses' ? 'badge-warning' : 'badge-danger') }}">{{ ucfirst($keuangan->status) }}</span></span></div>
        <div class="detail-row"><span class="detail-label">Keterangan</span><span class="detail-value">{{ $keuangan->keterangan ?? '-' }}</span></div>
    </div>
    <div class="detail-card-footer">
        <a href="{{ route('admin.keuangan.index') }}" class="btn btn-white">Kembali</a>
        <a href="{{ route('admin.keuangan.edit', $keuangan) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
    </div>
</div>
@endsection
