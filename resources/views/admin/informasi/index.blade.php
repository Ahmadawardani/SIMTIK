@extends('layouts.admin')
@section('title', 'Informasi')
@section('page-title', 'Pengelolaan Informasi')

@section('content')
<div class="table-card">
    <div class="table-header">
        <h2>Data Informasi</h2>
        <a href="{{ route('admin.informasi.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Informasi</a>
    </div>
    <table class="data-table">
        <thead>
            <tr><th>No</th><th>Judul</th><th>Jenis</th><th>Isi</th><th>Tanggal</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse($informasis as $i => $info)
            <tr>
                <td>{{ $informasis->firstItem() + $i }}</td>
                <td>{{ $info->judul }}</td>
                <td><span class="badge badge-info">{{ $info->jenis }}</span></td>
                <td>{{ Str::limit(strip_tags($info->isi), 50) }}</td>
                <td>{{ $info->tanggal->format('d/m/Y') }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('admin.informasi.show', $info) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.informasi.edit', $info) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.informasi.destroy', $info) }}" method="POST" onsubmit="return confirm('Yakin?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" style="text-align:center;color:var(--gray-400);padding:40px;">Belum ada data informasi</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $informasis->links() }}
</div>
@endsection
