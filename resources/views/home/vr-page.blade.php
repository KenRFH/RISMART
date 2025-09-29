@extends('app')

@section('title', $vrImage->judul)

@section('content')
<div class="container mx-auto pt-16 p-6">
    {{-- Judul --}}
    <h1 class="text-3xl font-bold mb-4">{{ $vrImage->judul }}</h1>

    {{-- Konten rich text (hasil TinyMCE) --}}
    <div class="prose max-w-none mb-6">
        {!! $vrImage->deskripsi !!}
    </div>

    {{-- Info update --}}
    <p class="text-sm text-gray-400 mb-6">
        Last Updated: {{ $vrImage->updated_at->format('d M Y') }}
    </p>

    {{-- VR Container --}}
    <div id="vr-container" class="w-full h-[600px] rounded shadow-lg overflow-hidden"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/three@0.105.2/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/panolens@0.12.0/build/panolens.min.js"></script>

<script>
    const panorama = new PANOLENS.ImagePanorama("{{ asset($vrImage->gambar) }}");
    const viewer = new PANOLENS.Viewer({
        container: document.querySelector('#vr-container')
    });
    viewer.add(panorama);
</script>
@endsection

