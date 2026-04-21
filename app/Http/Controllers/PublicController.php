<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Informasi;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function beranda()
    {
        $beritas = Berita::orderBy('tanggal', 'desc')->take(6)->get();
        $informasis = Informasi::orderBy('tanggal', 'desc')->take(4)->get();
        return view('public.beranda', compact('beritas', 'informasis'));
    }

    public function profil()
    {
        return view('public.profil');
    }

    public function layanan()
    {
        return view('public.layanan');
    }

    public function berita()
    {
        $beritas = Berita::orderBy('tanggal', 'desc')->paginate(9);
        return view('public.berita', compact('beritas'));
    }

    public function beritaDetail($id)
    {
        $berita = Berita::findOrFail($id);
        $beritaLainnya = Berita::where('id', '!=', $id)->orderBy('tanggal', 'desc')->take(4)->get();
        return view('public.berita-detail', compact('berita', 'beritaLainnya'));
    }

    public function galeri()
    {
        return view('public.galeri');
    }

    public function kontak()
    {
        return view('public.kontak');
    }
}
