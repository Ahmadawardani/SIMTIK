@extends('layouts.admin')
@section('title', 'Tambah Anggota')
@section('page-title', 'Tambah Anggota')

@section('content')
<div class="form-card">
    <div class="form-card-header"><h2><i class="fas fa-user-plus"></i> Tambah Anggota Baru</h2></div>
    <form action="{{ route('admin.anggota.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-card-body">
            <div class="form-row">
                <div class="form-group">
                    <label>NRP *</label>
                    <input type="text" name="nrp" class="form-control @error('nrp') error @enderror" value="{{ old('nrp') }}" required>
                    @error('nrp') <p class="error-text">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') error @enderror" value="{{ old('nama_lengkap') }}" required>
                    @error('nama_lengkap') <p class="error-text">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Pangkat *</label>
                    <input type="text" name="pangkat" class="form-control @error('pangkat') error @enderror" value="{{ old('pangkat') }}" required>
                    @error('pangkat') <p class="error-text">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label>Jabatan *</label>
                    <input type="text" name="jabatan" class="form-control @error('jabatan') error @enderror" value="{{ old('jabatan') }}" required>
                    @error('jabatan') <p class="error-text">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="form-card-footer">
            <a href="{{ route('admin.anggota.index') }}" class="btn btn-white">Batal</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Data</button>
        </div>
    </form>
</div>
@endsection
