@extends('layouts.admin')
@section('title', 'Tambah Berita')
@section('page-title', 'Tambah Berita')

@section('content')
<div class="form-card">
    <div class="form-card-header"><h2><i class="fas fa-newspaper"></i> Tambah Berita Baru</h2></div>
    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-card-body">
            <div class="form-group">
                <label>Judul Berita *</label>
                <input type="text" name="judul" class="form-control @error('judul') error @enderror" value="{{ old('judul') }}" required>
                @error('judul') <p class="error-text">{{ $message }}</p> @enderror
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Jenis Berita *</label>
                    <input type="text" name="jenis" class="form-control @error('jenis') error @enderror" value="{{ old('jenis') }}" placeholder="Contoh: Kegiatan, Prestasi" required>
                    @error('jenis') <p class="error-text">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control @error('tanggal') error @enderror" value="{{ old('tanggal') }}" required>
                    @error('tanggal') <p class="error-text">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Isi Berita *</label>
                <textarea name="isi" class="form-control @error('isi') error @enderror" style="min-height:200px;" required>{{ old('isi') }}</textarea>
                @error('isi') <p class="error-text">{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="form-card-footer">
            <a href="{{ route('admin.berita.index') }}" class="btn btn-white">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
        </div>
    </form>
</div>
@endsection
