@extends('layouts.admin')
@section('title', 'Tambah Surat')
@section('page-title', 'Tambah Surat')

@section('content')
<div class="form-card">
    <div class="form-card-header"><h2><i class="fas fa-envelope"></i> Tambah Surat Baru</h2></div>
    <form action="{{ route('admin.surat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-card-body">
            <h3 class="form-section-title">Informasi Surat</h3>
            <div class="form-row">
                <div class="form-group">
                    <label>Nomor Surat *</label>
                    <input type="text" name="nomor_surat" class="form-control @error('nomor_surat') error @enderror" value="{{ old('nomor_surat') }}" required>
                    @error('nomor_surat') <p class="error-text">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control @error('tanggal') error @enderror" value="{{ old('tanggal') }}" required>
                    @error('tanggal') <p class="error-text">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Perihal *</label>
                <input type="text" name="perihal" class="form-control @error('perihal') error @enderror" value="{{ old('perihal') }}" required>
                @error('perihal') <p class="error-text">{{ $message }}</p> @enderror
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Jenis Surat *</label>
                    <select name="jenis" class="form-control @error('jenis') error @enderror" required>
                        <option value="">Pilih Jenis</option>
                        <option value="jukrah" {{ old('jenis') == 'jukrah' ? 'selected' : '' }}>Jukrah</option>
                        <option value="nota_dinas" {{ old('jenis') == 'nota_dinas' ? 'selected' : '' }}>Nota Dinas</option>
                        <option value="sprin" {{ old('jenis') == 'sprin' ? 'selected' : '' }}>Sprin</option>
                        <option value="surat_telegram" {{ old('jenis') == 'surat_telegram' ? 'selected' : '' }}>Surat Telegram</option>
                        <option value="surat_biasa" {{ old('jenis') == 'surat_biasa' ? 'selected' : '' }}>Surat Biasa</option>
                    </select>
                    @error('jenis') <p class="error-text">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label>Tipe *</label>
                    <select name="tipe" class="form-control @error('tipe') error @enderror" required>
                        <option value="">Pilih Tipe</option>
                        <option value="masuk" {{ old('tipe') == 'masuk' ? 'selected' : '' }}>Surat Masuk</option>
                        <option value="keluar" {{ old('tipe') == 'keluar' ? 'selected' : '' }}>Surat Keluar</option>
                    </select>
                    @error('tipe') <p class="error-text">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Dari / Kepada *</label>
                <input type="text" name="dari_kepada" class="form-control @error('dari_kepada') error @enderror" value="{{ old('dari_kepada') }}" required>
                @error('dari_kepada') <p class="error-text">{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
                <label>File Surat (PDF/DOC)</label>
                <input type="file" name="file_surat" class="form-control" accept=".pdf,.doc,.docx">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
            </div>
        </div>
        <div class="form-card-footer">
            <a href="{{ route('admin.surat.index') }}" class="btn btn-white">Batal</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Data</button>
        </div>
    </form>
</div>
@endsection
