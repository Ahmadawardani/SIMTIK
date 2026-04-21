<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    public function index(Request $request)
    {
        $query = Surat::query();

        if ($request->filled('jenis')) {
            $query->where('jenis', $request->jenis);
        }
        if ($request->filled('tipe')) {
            $query->where('tipe', $request->tipe);
        }
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nomor_surat', 'like', "%{$search}%")
                  ->orWhere('perihal', 'like', "%{$search}%");
            });
        }

        $surats = $query->orderBy('tanggal', 'desc')->paginate(10);
        return view('admin.surat.index', compact('surats'));
    }

    public function create()
    {
        return view('admin.surat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'perihal' => 'required|string|max:255',
            'jenis' => 'required|in:jukrah,nota_dinas,sprin,surat_telegram,surat_biasa',
            'tipe' => 'required|in:masuk,keluar',
            'dari_kepada' => 'required|string|max:255',
            'file_surat' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'keterangan' => 'nullable|string',
        ]);

        if ($request->hasFile('file_surat')) {
            $validated['file_surat'] = $request->file('file_surat')->store('surat', 'public');
        }

        Surat::create($validated);
        return redirect()->route('admin.surat.index')->with('success', 'Surat berhasil ditambahkan.');
    }

    public function show(Surat $surat)
    {
        return view('admin.surat.show', compact('surat'));
    }

    public function edit(Surat $surat)
    {
        return view('admin.surat.edit', compact('surat'));
    }

    public function update(Request $request, Surat $surat)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'perihal' => 'required|string|max:255',
            'jenis' => 'required|in:jukrah,nota_dinas,sprin,surat_telegram,surat_biasa',
            'tipe' => 'required|in:masuk,keluar',
            'dari_kepada' => 'required|string|max:255',
            'file_surat' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'keterangan' => 'nullable|string',
        ]);

        if ($request->hasFile('file_surat')) {
            if ($surat->file_surat) {
                Storage::disk('public')->delete($surat->file_surat);
            }
            $validated['file_surat'] = $request->file('file_surat')->store('surat', 'public');
        }

        $surat->update($validated);
        return redirect()->route('admin.surat.index')->with('success', 'Surat berhasil diperbarui.');
    }

    public function destroy(Surat $surat)
    {
        if ($surat->file_surat) {
            Storage::disk('public')->delete($surat->file_surat);
        }
        $surat->delete();
        return redirect()->route('admin.surat.index')->with('success', 'Surat berhasil dihapus.');
    }
}
