<?php

namespace App\Http\Controllers;

use App\Models\VrImage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard ()
    {
        $articles = VrImage::select('id', 'judul', 'gambar', 'updated_at')
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('admin.dashboard', compact ('articles'));
    }
}
