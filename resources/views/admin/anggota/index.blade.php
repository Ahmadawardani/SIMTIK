@extends('layouts.admin')
@section('title', 'Anggota')
@section('page-title', 'Manajemen Anggota')

@section('content')
<div class="table-card">
    <div class="table-header">
        <h2>Data Anggota</h2>
        <div class="table-filters">
            <form action="{{ route('admin.anggota.index') }}" method="GET" style="display:flex;gap:10px;">
                <input type="text" name="search" class="filter-input" placeholder="Cari anggota..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search"></i></button>
            </form>
            <a href="{{ route('admin.anggota.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Anggota</a>
        </div>
    </div>
    <table class="data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>Nama Lengkap</th>
                <th>Pangkat</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($anggotas as $i => $anggota)
            <tr>
                <td>{{ $anggotas->firstItem() + $i }}</td>
                <td>{{ $anggota->nrp }}</td>
                <td>{{ $anggota->nama_lengkap }}</td>
                <td>{{ $anggota->pangkat }}</td>
                <td>{{ $anggota->jabatan }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('admin.anggota.show', $anggota) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.anggota.edit', $anggota) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.anggota.destroy', $anggota) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" style="text-align:center;color:var(--gray-400);padding:40px;">Belum ada data anggota</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $anggotas->links() }}
</div>
@endsection
