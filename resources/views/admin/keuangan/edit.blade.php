@extends('layouts.admin')
@section('title', 'Edit Transaksi')
@section('page-title', 'Edit Transaksi')

@section('content')
<div class="form-card">
    <div class="form-card-header"><h2><i class="fas fa-edit"></i> Edit Transaksi</h2></div>
    <form action="{{ route('admin.keuangan.update', $keuangan) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-card-body">
            <div class="form-row">
                <div class="form-group">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $keuangan->tanggal->format('Y-m-d')) }}" required>
                </div>
                <div class="form-group">
                    <label>Uraian Kegiatan *</label>
                    <input type="text" name="uraian_kegiatan" class="form-control" value="{{ old('uraian_kegiatan', $keuangan->uraian_kegiatan) }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Jenis Belanja *</label>
                    <select name="jenis_belanja" class="form-control" required>
                        <option value="Belanja Pegawai" {{ $keuangan->jenis_belanja == 'Belanja Pegawai' ? 'selected' : '' }}>Belanja Pegawai</option>
                        <option value="Belanja Barang" {{ $keuangan->jenis_belanja == 'Belanja Barang' ? 'selected' : '' }}>Belanja Barang</option>
                        <option value="Belanja Modal" {{ $keuangan->jenis_belanja == 'Belanja Modal' ? 'selected' : '' }}>Belanja Modal</option>
                        <option value="Belanja Lainnya" {{ $keuangan->jenis_belanja == 'Belanja Lainnya' ? 'selected' : '' }}>Belanja Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kode MAK *</label>
                    <input type="text" name="kode_mak" class="form-control" value="{{ old('kode_mak', $keuangan->kode_mak) }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Nilai Transaksi *</label>
                    <input type="number" name="nilai" class="form-control" value="{{ old('nilai', $keuangan->nilai) }}" min="0" step="0.01" required>
                </div>
                <div class="form-group">
                    <label>Status *</label>
                    <select name="status" class="form-control" required>
                        <option value="pending" {{ $keuangan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="proses" {{ $keuangan->status == 'proses' ? 'selected' : '' }}>Proses</option>
                        <option value="selesai" {{ $keuangan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control">{{ old('keterangan', $keuangan->keterangan) }}</textarea>
            </div>
        </div>
        <div class="form-card-footer">
            <a href="{{ route('admin.keuangan.index') }}" class="btn btn-white">Batal</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
        </div>
    </form>
</div>
@endsection
