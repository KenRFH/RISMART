<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        $articles = Artikel::select('id', 'judul', 'gambar', 'updated_at')
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('admin.dashboard', compact ('articles'));
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel', compact('artikel'));
    }
}
