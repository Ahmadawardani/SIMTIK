@extends('layouts.admin')
@section('title', 'Keuangan')
@section('page-title', 'Pengelolaan Keuangan')

@section('content')
<div class="stats-grid">
    <div class="stat-card"><div class="stat-icon blue"><i class="fas fa-receipt"></i></div><div class="stat-info"><h3>{{ $totalTransaksi }}</h3><p>Total Transaksi</p></div></div>
    <div class="stat-card" style="border-left-color:var(--success);"><div class="stat-icon green"><i class="fas fa-money-bill-wave"></i></div><div class="stat-info"><h3>Rp {{ number_format($totalNilai, 0, ',', '.') }}</h3><p>Total Nilai Belanja</p></div></div>
    <div class="stat-card" style="border-left-color:var(--warning);"><div class="stat-icon yellow"><i class="fas fa-check-circle"></i></div><div class="stat-info"><h3>{{ $transaksiSelesai }}</h3><p>Transaksi Selesai</p></div></div>
    <div class="stat-card" style="border-left-color:var(--danger);"><div class="stat-icon red"><i class="fas fa-clock"></i></div><div class="stat-info"><h3>{{ $perluTindakan }}</h3><p>Perlu Tindakan</p></div></div>
</div>

<div class="table-card">
    <div class="table-header">
        <h2>Data Transaksi</h2>
        <div class="table-filters">
            <form action="{{ route('admin.keuangan.index') }}" method="GET" style="display:flex;gap:10px;flex-wrap:wrap;">
                <select name="status" class="filter-input" onchange="this.form.submit()">
                    <option value="">Semua Status</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="proses" {{ request('status') == 'proses' ? 'selected' : '' }}>Proses</option>
                    <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
                <input type="text" name="search" class="filter-input" placeholder="Cari..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search"></i></button>
            </form>
            <a href="{{ route('admin.keuangan.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Transaksi</a>
        </div>
    </div>
    <table class="data-table">
        <thead>
            <tr><th>No</th><th>Tanggal</th><th>Uraian</th><th>Jenis Belanja</th><th>Nilai</th><th>Status</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse($keuangans as $i => $k)
            <tr>
                <td>{{ $keuangans->firstItem() + $i }}</td>
                <td>{{ $k->tanggal->format('d/m/Y') }}</td>
                <td>{{ Str::limit($k->uraian_kegiatan, 35) }}</td>
                <td>{{ $k->jenis_belanja }}</td>
                <td style="font-weight:600;">Rp {{ number_format($k->nilai, 0, ',', '.') }}</td>
                <td><span class="badge {{ $k->status == 'selesai' ? 'badge-success' : ($k->status == 'proses' ? 'badge-warning' : 'badge-danger') }}">{{ ucfirst($k->status) }}</span></td>
                <td>
                    <div class="actions">
                        <a href="{{ route('admin.keuangan.show', $k) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.keuangan.edit', $k) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.keuangan.destroy', $k) }}" method="POST" onsubmit="return confirm('Yakin?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" style="text-align:center;color:var(--gray-400);padding:40px;">Belum ada transaksi</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $keuangans->links() }}
</div>
@endsection
