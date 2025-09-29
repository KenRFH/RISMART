@extends('app')

@section('content')
<section class="container mx-auto py-10 px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Tempat (Admin)</h1>
        <a href="{{ route('vr_page.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
            + Tambah Tempat
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($vrImages as $item)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
            <div class="aspect-w-16 aspect-h-9">
                <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover" loading="lazy">
            </div>
            <div class="p-4">
                <h2 class="font-semibold text-lg">{{ $item->judul }}</h2>
                <p class="text-sm text-gray-500">Terakhir update: {{ $item->updated_at->format('d M Y') }}</p>
                <p class="text-sm">
                    Status:
                    @if($item->isActive)
                        <span class="text-green-600 font-semibold">Aktif</span>
                    @else
                        <span class="text-red-600 font-semibold">Non-Aktif</span>
                    @endif
                </p>
            </div>

            {{-- Tombol admin --}}
            <div class="flex justify-around items-center border-t p-2 bg-gray-50">
                {{-- Edit --}}
                <a href="{{ route('vr_page.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800">✏️</a>

                {{-- Hapus / Nonaktifkan --}}
                @if($item->isActive)
                    <form action="{{ route('vr_page.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin nonaktifkan item ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800">🗑️</button>
                    </form>
                @endif

                {{-- Restore / Aktifkan --}}
                @if(!$item->isActive)
                    <form action="{{ route('vr_page.restore', $item->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="text-green-600 hover:text-green-800">♻️</button>
                    </form>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
