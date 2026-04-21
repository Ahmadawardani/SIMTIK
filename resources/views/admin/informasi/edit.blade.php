@extends('layouts.admin')
@section('title', 'Edit Informasi')
@section('page-title', 'Edit Informasi')

@section('content')
<div class="form-card">
    <div class="form-card-header"><h2><i class="fas fa-edit"></i> Edit Informasi</h2></div>
    <form action="{{ route('admin.informasi.update', $informasi) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="form-card-body">
            <div class="form-group">
                <label>Judul Informasi *</label>
                <input type="text" name="judul" class="form-control" value="{{ old('judul', $informasi->judul) }}" required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Jenis Informasi *</label>
                    <input type="text" name="jenis" class="form-control" value="{{ old('jenis', $informasi->jenis) }}" required>
                </div>
                <div class="form-group">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $informasi->tanggal->format('Y-m-d')) }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Isi *</label>
                <textarea name="isi" class="form-control" style="min-height:180px;" required>{{ old('isi', $informasi->isi) }}</textarea>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                @if($informasi->gambar) <div style="margin-bottom:8px;"><img src="{{ asset('storage/' . $informasi->gambar) }}" style="height:80px;border-radius:8px;"></div> @endif
                <input type="file" name="gambar" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="form-card-footer">
            <a href="{{ route('admin.informasi.index') }}" class="btn btn-white">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
        </div>
    </form>
</div>
@endsection
