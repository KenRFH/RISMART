@extends('app')

@section('content')
<section class="container mx-auto py-10 px-4">
    <h1 class="text-2xl font-bold mb-6">Daftar VR Images</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($vrImages as $item)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
            <div class="aspect-w-16 aspect-h-9">
                <img src="{{ asset('assets/'.$item->gambar) }}" alt="{{ $item->judul }}"
                     class="w-full h-48 object-cover">
            </div>
            <div class="p-4">
                <h2 class="font-semibold text-lg">{{ $item->judul }}</h2>
                <p class="text-sm text-gray-500">
                    Terakhir update: {{ $item->updated_at->format('d M Y') }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
