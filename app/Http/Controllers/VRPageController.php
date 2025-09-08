<?php

namespace App\Http\Controllers;

use App\Models\VrImage;
use Illuminate\Http\Request;

class VRPageController extends Controller
{
    public function index()
    {

    }

    public function show($id)
    {
        $destinasi = VrImage::findOrFail($id);
        $semuaDestinasi = VrImage::all();

        return view('home.vr', compact('destinasi', 'semuaDestinasi'));
    }
}
