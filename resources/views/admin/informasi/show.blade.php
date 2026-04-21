@extends('layouts.admin')
@section('title', 'Detail Informasi')
@section('page-title', 'Detail Informasi')

@section('content')
<div class="detail-card" style="max-width:700px;">
    <div class="detail-card-header"><i class="fas fa-info-circle" style="font-size:1.3rem;"></i><h2>Detail Informasi</h2></div>
    <div class="detail-card-body">
        <div class="detail-row"><span class="detail-label">Judul</span><span class="detail-value">{{ $informasi->judul }}</span></div>
        <div class="detail-row"><span class="detail-label">Jenis</span><span class="detail-value"><span class="badge badge-info">{{ $informasi->jenis }}</span></span></div>
        <div class="detail-row"><span class="detail-label">Tanggal</span><span class="detail-value">{{ $informasi->tanggal->format('d M Y') }}</span></div>
        <div class="detail-row"><span class="detail-label">Isi</span><span class="detail-value">{!! nl2br(e($informasi->isi)) !!}</span></div>
        @if($informasi->gambar)
        <div class="detail-row"><span class="detail-label">Gambar</span><span class="detail-value"><img src="{{ asset('storage/' . $informasi->gambar) }}" style="max-height:200px;border-radius:8px;"></span></div>
        @endif
    </div>
    <div class="detail-card-footer">
        <a href="{{ route('admin.informasi.index') }}" class="btn btn-white">Kembali</a>
        <a href="{{ route('admin.informasi.edit', $informasi) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
    </div>
</div>
@endsection
