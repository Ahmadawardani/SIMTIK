@extends('layouts.admin')
@section('title', 'Edit Berita')
@section('page-title', 'Edit Berita')

@section('content')
<div class="form-card">
    <div class="form-card-header"><h2><i class="fas fa-edit"></i> Edit Berita</h2></div>
    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="form-card-body">
            <div class="form-group">
                <label>Judul Berita *</label>
                <input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Jenis Berita *</label>
                    <input type="text" name="jenis" class="form-control" value="{{ old('jenis', $berita->jenis) }}" required>
                </div>
                <div class="form-group">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $berita->tanggal->format('Y-m-d')) }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Isi Berita *</label>
                <textarea name="isi" class="form-control" style="min-height:200px;" required>{{ old('isi', $berita->isi) }}</textarea>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                @if($berita->gambar) <div style="margin-bottom:8px;"><img src="{{ asset('storage/' . $berita->gambar) }}" style="height:80px;border-radius:8px;"></div> @endif
                <input type="file" name="gambar" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="form-card-footer">
            <a href="{{ route('admin.berita.index') }}" class="btn btn-white">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
        </div>
    </form>
</div>
@endsection
