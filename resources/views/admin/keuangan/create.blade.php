@extends('layouts.admin')
@section('title', 'Tambah Transaksi')
@section('page-title', 'Tambah Transaksi')

@section('content')
<div class="form-card">
    <div class="form-card-header"><h2><i class="fas fa-plus-circle"></i> Tambah Transaksi Baru</h2></div>
    <form action="{{ route('admin.keuangan.store') }}" method="POST">
        @csrf
        <div class="form-card-body">
            <h3 class="form-section-title">Informasi Dasar</h3>
            <div class="form-row">
                <div class="form-group">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control @error('tanggal') error @enderror" value="{{ old('tanggal') }}" required>
                    @error('tanggal') <p class="error-text">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label>Uraian Kegiatan *</label>
                    <input type="text" name="uraian_kegiatan" class="form-control @error('uraian_kegiatan') error @enderror" value="{{ old('uraian_kegiatan') }}" placeholder="Uraikan kegiatan secara singkat" required>
                    @error('uraian_kegiatan') <p class="error-text">{{ $message }}</p> @enderror
                </div>
            </div>
            <h3 class="form-section-title">Detail Anggaran</h3>
            <div class="form-row">
                <div class="form-group">
                    <label>Jenis Belanja *</label>
                    <select name="jenis_belanja" class="form-control @error('jenis_belanja') error @enderror" required>
                        <option value="">Pilih Jenis</option>
                        <option value="Belanja Pegawai" {{ old('jenis_belanja') == 'Belanja Pegawai' ? 'selected' : '' }}>Belanja Pegawai</option>
                        <option value="Belanja Barang" {{ old('jenis_belanja') == 'Belanja Barang' ? 'selected' : '' }}>Belanja Barang</option>
                        <option value="Belanja Modal" {{ old('jenis_belanja') == 'Belanja Modal' ? 'selected' : '' }}>Belanja Modal</option>
                        <option value="Belanja Lainnya" {{ old('jenis_belanja') == 'Belanja Lainnya' ? 'selected' : '' }}>Belanja Lainnya</option>
                    </select>
                    @error('jenis_belanja') <p class="error-text">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label>Kode MAK *</label>
                    <input type="text" name="kode_mak" class="form-control @error('kode_mak') error @enderror" value="{{ old('kode_mak') }}" required>
                    @error('kode_mak') <p class="error-text">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Nilai Transaksi *</label>
                    <input type="number" name="nilai" class="form-control @error('nilai') error @enderror" value="{{ old('nilai') }}" min="0" step="0.01" required>
                    @error('nilai') <p class="error-text">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label>Status *</label>
                    <select name="status" class="form-control @error('status') error @enderror" required>
                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="proses" {{ old('status') == 'proses' ? 'selected' : '' }}>Proses</option>
                        <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                    @error('status') <p class="error-text">{{ $message }}</p> @enderror
                </div>
            </div>
            <h3 class="form-section-title">Keterangan Tambahan</h3>
            <div class="form-group">
                <textarea name="keterangan" class="form-control" placeholder="Optional">{{ old('keterangan') }}</textarea>
            </div>
        </div>
        <div class="form-card-footer">
            <a href="{{ route('admin.keuangan.index') }}" class="btn btn-white">Batal</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Data</button>
        </div>
    </form>
</div>
@endsection
