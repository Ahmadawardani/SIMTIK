@extends('layouts.admin')
@section('title', 'Edit Surat')
@section('page-title', 'Edit Surat')

@section('content')
<div class="form-card">
    <div class="form-card-header"><h2><i class="fas fa-envelope"></i> Edit Data Surat</h2></div>
    <form action="{{ route('admin.surat.update', $surat) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="form-card-body">
            <div class="form-row">
                <div class="form-group">
                    <label>Nomor Surat *</label>
                    <input type="text" name="nomor_surat" class="form-control" value="{{ old('nomor_surat', $surat->nomor_surat) }}" required>
                </div>
                <div class="form-group">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $surat->tanggal->format('Y-m-d')) }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Perihal *</label>
                <input type="text" name="perihal" class="form-control" value="{{ old('perihal', $surat->perihal) }}" required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Jenis Surat *</label>
                    <select name="jenis" class="form-control" required>
                        <option value="jukrah" {{ $surat->jenis == 'jukrah' ? 'selected' : '' }}>Jukrah</option>
                        <option value="nota_dinas" {{ $surat->jenis == 'nota_dinas' ? 'selected' : '' }}>Nota Dinas</option>
                        <option value="sprin" {{ $surat->jenis == 'sprin' ? 'selected' : '' }}>Sprin</option>
                        <option value="surat_telegram" {{ $surat->jenis == 'surat_telegram' ? 'selected' : '' }}>Surat Telegram</option>
                        <option value="surat_biasa" {{ $surat->jenis == 'surat_biasa' ? 'selected' : '' }}>Surat Biasa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tipe *</label>
                    <select name="tipe" class="form-control" required>
                        <option value="masuk" {{ $surat->tipe == 'masuk' ? 'selected' : '' }}>Surat Masuk</option>
                        <option value="keluar" {{ $surat->tipe == 'keluar' ? 'selected' : '' }}>Surat Keluar</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Dari / Kepada *</label>
                <input type="text" name="dari_kepada" class="form-control" value="{{ old('dari_kepada', $surat->dari_kepada) }}" required>
            </div>
            <div class="form-group">
                <label>File Surat</label>
                @if($surat->file_surat) <p style="font-size:0.85rem;color:var(--gray-500);margin-bottom:6px;">File saat ini: {{ basename($surat->file_surat) }}</p> @endif
                <input type="file" name="file_surat" class="form-control" accept=".pdf,.doc,.docx">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control">{{ old('keterangan', $surat->keterangan) }}</textarea>
            </div>
        </div>
        <div class="form-card-footer">
            <a href="{{ route('admin.surat.index') }}" class="btn btn-white">Batal</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
        </div>
    </form>
</div>
@endsection
