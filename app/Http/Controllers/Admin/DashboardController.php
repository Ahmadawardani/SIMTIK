<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Surat;
use App\Models\Keuangan;
use App\Models\Informasi;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'anggota' => Anggota::count(),
            'persuratan' => Surat::count(),
            'keuangan' => Keuangan::count(),
            'informasi' => Informasi::count(),
            'berita' => Berita::count(),
        ];

        $suratTerbaru = Surat::orderBy('created_at', 'desc')->take(5)->get();
        $keuanganTerbaru = Keuangan::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'suratTerbaru', 'keuanganTerbaru'));
    }
}
