@extends('app')

@section('content')
<div class="relative w-full h-screen">
    {{-- VR Viewer Fullscreen --}}
    <div id="vr-container" class="absolute inset-0 w-full h-full"></div>

    {{-- Overlay Info --}}
    <div id="overlay-info" class="absolute max-w-sm group cursor-pointer">
        {{-- Wrapper untuk hover effect --}}
        <div class="relative">
            {{-- Judul selalu tampil --}}
            <h1 class="text-2xl font-bold text-white group-hover:underline">
                {{ $destinasi->judul }}
            </h1>

            {{-- Kotak konten tambahan (judul tetap ikut) --}}
            <div class="hidden group-hover:block bg-black/60 text-white p-5 rounded-lg mt-2">
                <h1 class="text-2xl font-bold mb-2 underline">
                    {{ $destinasi->judul }}
                </h1>
                <p class="text-sm leading-relaxed">
                    {{ $destinasi->text }}
                </p>
                <p class="text-xs text-gray-300 mt-3">
                    Terakhir diperbarui: {{ $destinasi->updated_at->format('d M Y') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/three@0.105.2/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/panolens@0.12.0/build/panolens.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // === VR VIEWER ===
    const panorama = new PANOLENS.ImagePanorama("{{ asset('assets/'.$destinasi->gambar) }}");

    const viewer = new PANOLENS.Viewer({
        container: document.querySelector('#vr-container'),
        controlBar: false,
        autoHideInfospot: true,
        cameraFov: 80
    });

    viewer.add(panorama);

    // Auto rotate
    viewer.OrbitControls.autoRotate = true;
    viewer.OrbitControls.autoRotateSpeed = 0.5;
    viewer.OrbitControls.enableZoom = false;

    // === RANDOM POSITION UNTUK OVERLAY ===
    const overlay = document.getElementById('overlay-info');
    const positions = [
        { top: '20%', left: '10%' },
        { top: '25%', right: '10%' },
        { bottom: '20%', left: '15%' },
        { bottom: '25%', right: '15%' },
        { top: '30%', left: '40%' },
    ];
    const randomPos = positions[Math.floor(Math.random() * positions.length)];

    // apply posisi (judul fix di koordinat ini)
    Object.assign(overlay.style, randomPos, { position: 'absolute' });
});
</script>
@endpush
