@extends('layouts.admin')
@section('title', 'Detail Surat')
@section('page-title', 'Detail Surat')

@section('content')
<div class="detail-card" style="max-width:700px;">
    <div class="detail-card-header">
        <i class="fas fa-envelope" style="font-size:1.3rem;"></i>
        <h2>Detail Surat</h2>
    </div>
    <div class="detail-card-body">
        <div class="detail-row"><span class="detail-label">Nomor Surat</span><span class="detail-value">{{ $surat->nomor_surat }}</span></div>
        <div class="detail-row"><span class="detail-label">Tanggal</span><span class="detail-value">{{ $surat->tanggal->format('d M Y') }}</span></div>
        <div class="detail-row"><span class="detail-label">Perihal</span><span class="detail-value">{{ $surat->perihal }}</span></div>
        <div class="detail-row"><span class="detail-label">Jenis</span><span class="detail-value"><span class="badge badge-primary">{{ str_replace('_', ' ', ucfirst($surat->jenis)) }}</span></span></div>
        <div class="detail-row"><span class="detail-label">Tipe</span><span class="detail-value"><span class="badge {{ $surat->tipe == 'masuk' ? 'badge-success' : 'badge-info' }}">{{ ucfirst($surat->tipe) }}</span></span></div>
        <div class="detail-row"><span class="detail-label">Dari/Kepada</span><span class="detail-value">{{ $surat->dari_kepada }}</span></div>
        @if($surat->file_surat)
        <div class="detail-row"><span class="detail-label">File</span><span class="detail-value"><a href="{{ asset('storage/' . $surat->file_surat) }}" target="_blank" class="btn btn-sm btn-primary"><i class="fas fa-download"></i> Download</a></span></div>
        @endif
        <div class="detail-row"><span class="detail-label">Keterangan</span><span class="detail-value">{{ $surat->keterangan ?? '-' }}</span></div>
    </div>
    <div class="detail-card-footer">
        <a href="{{ route('admin.surat.index') }}" class="btn btn-white">Kembali</a>
        <a href="{{ route('admin.surat.edit', $surat) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
    </div>
</div>
@endsection
