<?php

namespace App\Http\Controllers;

use App\Models\VrImage;
use Illuminate\Http\Request;

class VRPageController extends Controller
{
    public function index()
    {
        $vrImages = VrImage::latest()->get();
        return view('home.vr-cards', compact('vrImages'));
    }

    public function show($id)
    {
        $vrImage = VrImage::where('id', $id)->firstOrFail();

        // Kirim ke view
        return view('home.vr-page', compact('vrImage'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function adminIndex()
    {
        $vrImages = VrImage::latest()->get();
        return view('admin.vr-cards', compact('vrImages'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'judul'   => 'required|string|max:255',
            'deskripsi'    => 'required|string',
            'gambar'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('assets/vr_images'), $filename);
            $data['gambar'] = 'assets/vr_images/' . $filename;
        }

        VrImage::create($data);

        return redirect()->back()->with('success', 'Destinasi berhasil ditambahkan!');
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

    public function restore($id)
    {

    }
}
