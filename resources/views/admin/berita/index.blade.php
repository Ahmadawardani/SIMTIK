@extends('layouts.admin')
@section('title', 'Berita')
@section('page-title', 'Pengelolaan Berita')

@section('content')
<div class="table-card">
    <div class="table-header">
        <h2>Data Berita</h2>
        <a href="{{ route('admin.berita.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Berita</a>
    </div>
    <table class="data-table">
        <thead>
            <tr><th>No</th><th>Judul</th><th>Jenis</th><th>Isi</th><th>Tanggal</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse($beritas as $i => $berita)
            <tr>
                <td>{{ $beritas->firstItem() + $i }}</td>
                <td>{{ $berita->judul }}</td>
                <td><span class="badge badge-primary">{{ $berita->jenis }}</span></td>
                <td>{{ Str::limit(strip_tags($berita->isi), 50) }}</td>
                <td>{{ $berita->tanggal->format('d/m/Y') }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('admin.berita.show', $berita) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.berita.edit', $berita) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" onsubmit="return confirm('Yakin?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" style="text-align:center;color:var(--gray-400);padding:40px;">Belum ada data berita</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $beritas->links() }}
</div>
@endsection
