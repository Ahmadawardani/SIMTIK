@extends('layouts.admin')
@section('title', 'Persuratan')
@section('page-title', 'Manajemen Persuratan')

@section('content')
<div class="table-card">
    <div class="table-header">
        <h2>Data Persuratan</h2>
        <div class="table-filters">
            <form action="{{ route('admin.surat.index') }}" method="GET" style="display:flex;gap:10px;flex-wrap:wrap;">
                <select name="jenis" class="filter-input" onchange="this.form.submit()">
                    <option value="">Semua Jenis</option>
                    <option value="jukrah" {{ request('jenis') == 'jukrah' ? 'selected' : '' }}>Jukrah</option>
                    <option value="nota_dinas" {{ request('jenis') == 'nota_dinas' ? 'selected' : '' }}>Nota Dinas</option>
                    <option value="sprin" {{ request('jenis') == 'sprin' ? 'selected' : '' }}>Sprin</option>
                    <option value="surat_telegram" {{ request('jenis') == 'surat_telegram' ? 'selected' : '' }}>Surat Telegram</option>
                    <option value="surat_biasa" {{ request('jenis') == 'surat_biasa' ? 'selected' : '' }}>Surat Biasa</option>
                </select>
                <select name="tipe" class="filter-input" onchange="this.form.submit()">
                    <option value="">Semua Tipe</option>
                    <option value="masuk" {{ request('tipe') == 'masuk' ? 'selected' : '' }}>Masuk</option>
                    <option value="keluar" {{ request('tipe') == 'keluar' ? 'selected' : '' }}>Keluar</option>
                </select>
                <input type="text" name="search" class="filter-input" placeholder="Cari..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search"></i></button>
            </form>
            <a href="{{ route('admin.surat.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Surat</a>
        </div>
    </div>
    <table class="data-table">
        <thead>
            <tr><th>No</th><th>No. Surat</th><th>Perihal</th><th>Jenis</th><th>Tipe</th><th>Tanggal</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse($surats as $i => $surat)
            <tr>
                <td>{{ $surats->firstItem() + $i }}</td>
                <td>{{ $surat->nomor_surat }}</td>
                <td>{{ Str::limit($surat->perihal, 40) }}</td>
                <td><span class="badge badge-primary">{{ str_replace('_', ' ', ucfirst($surat->jenis)) }}</span></td>
                <td><span class="badge {{ $surat->tipe == 'masuk' ? 'badge-success' : 'badge-info' }}">{{ ucfirst($surat->tipe) }}</span></td>
                <td>{{ $surat->tanggal->format('d/m/Y') }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('admin.surat.show', $surat) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.surat.edit', $surat) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.surat.destroy', $surat) }}" method="POST" onsubmit="return confirm('Yakin?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" style="text-align:center;color:var(--gray-400);padding:40px;">Belum ada data surat</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $surats->links() }}
</div>
@endsection
