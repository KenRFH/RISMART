<?php

namespace App\Http\Controllers;

use App\Models\VrImage;
use Illuminate\Http\Request;

class VRPageController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $active = VrImage::where('isActive', true)
            ->latest()->get();
            $inactive = VrImage::where('isActive', false)
            ->latest()->get();
            $vrImages = $active->merge($inactive);

            return view('admin.vr-cards', compact('vrImages'));
        } else {
            $vrImages = VrImage::where('isActive', true)->latest()->get();
            return view('home.vr-cards', compact('vrImages'));
        }
    }

    public function show($id)
    {
        $vrImage = VrImage::where('id', $id)->firstOrFail();

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

        return redirect()->route('vr_page.public.index')->with('success', 'Destinasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $vrImage = VrImage::findOrFail($id);
        return view('admin.edit', compact('vrImage'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|string',
        ]);

        $vrImage = VrImage::findOrFail($id);
        $vrImage->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'isActive' => $request->has('isActive'),
        ]);

        return redirect()->route('vr-images.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = VrImage::findOrFail($id);
        $item->isActive = false;
        $item->save();
        return redirect()->back();
    }

    public function restore($id)
    {
        $item = VrImage::findOrFail($id);
        $item->isActive = true;
        $item->save();
        return redirect()->back();
    }
}
