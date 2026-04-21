<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index(Request $request)
    {
        $query = Keuangan::query();

        if ($request->filled('jenis')) {
            $query->where('jenis_belanja', $request->jenis);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('uraian_kegiatan', 'like', "%{$search}%")
                  ->orWhere('kode_mak', 'like', "%{$search}%");
            });
        }

        $keuangans = $query->orderBy('tanggal', 'desc')->paginate(10);

        $totalTransaksi = Keuangan::count();
        $totalNilai = Keuangan::sum('nilai');
        $transaksiSelesai = Keuangan::where('status', 'selesai')->count();
        $perluTindakan = Keuangan::where('status', 'pending')->count();

        return view('admin.keuangan.index', compact(
            'keuangans', 'totalTransaksi', 'totalNilai', 'transaksiSelesai', 'perluTindakan'
        ));
    }

    public function create()
    {
        return view('admin.keuangan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'uraian_kegiatan' => 'required|string',
            'jenis_belanja' => 'required|string|max:100',
            'kode_mak' => 'required|string|max:50',
            'nilai' => 'required|numeric|min:0',
            'status' => 'required|in:pending,proses,selesai',
            'keterangan' => 'nullable|string',
        ]);

        Keuangan::create($validated);
        return redirect()->route('admin.keuangan.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function show(Keuangan $keuangan)
    {
        return view('admin.keuangan.show', compact('keuangan'));
    }

    public function edit(Keuangan $keuangan)
    {
        return view('admin.keuangan.edit', compact('keuangan'));
    }

    public function update(Request $request, Keuangan $keuangan)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'uraian_kegiatan' => 'required|string',
            'jenis_belanja' => 'required|string|max:100',
            'kode_mak' => 'required|string|max:50',
            'nilai' => 'required|numeric|min:0',
            'status' => 'required|in:pending,proses,selesai',
            'keterangan' => 'nullable|string',
        ]);

        $keuangan->update($validated);
        return redirect()->route('admin.keuangan.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(Keuangan $keuangan)
    {
        $keuangan->delete();
        return redirect()->route('admin.keuangan.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
