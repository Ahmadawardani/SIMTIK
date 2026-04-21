@extends('layouts.admin')
@section('title', 'Detail Anggota')
@section('page-title', 'Detail Anggota')

@section('content')
<div class="detail-card" style="max-width:600px;">
    <div class="detail-card-header">
        <i class="fas fa-user" style="font-size:1.5rem;"></i>
        <h2>{{ $anggota->nama_lengkap }}</h2>
    </div>
    <div class="detail-card-body" style="display:flex;gap:24px;">
        <div style="flex-shrink:0;">
            @if($anggota->foto)
                <img src="{{ asset('storage/' . $anggota->foto) }}" style="width:140px;height:170px;object-fit:cover;border-radius:var(--radius);border:3px solid var(--primary);">
            @else
                <div style="width:140px;height:170px;background:var(--primary-100);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;font-size:3rem;color:var(--primary);border:3px solid var(--primary);">
                    <i class="fas fa-user"></i>
                </div>
            @endif
        </div>
        <div style="flex:1;">
            <div class="detail-row"><span class="detail-label">NRP</span><span class="detail-value">{{ $anggota->nrp }}</span></div>
            <div class="detail-row"><span class="detail-label">Nama</span><span class="detail-value">{{ $anggota->nama_lengkap }}</span></div>
            <div class="detail-row"><span class="detail-label">Pangkat</span><span class="detail-value">{{ $anggota->pangkat }}</span></div>
            <div class="detail-row"><span class="detail-label">Jabatan</span><span class="detail-value">{{ $anggota->jabatan }}</span></div>
        </div>
    </div>
    <div class="detail-card-footer">
        <a href="{{ route('admin.anggota.index') }}" class="btn btn-white">Kembali</a>
        <a href="{{ route('admin.anggota.edit', $anggota) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
    </div>
</div>
@endsection
