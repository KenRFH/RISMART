@extends('app')

@section('content')
<section class="p-6">
    <h1 class="text-2xl font-bold mb-6">📑 Dashboard Artikel</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $artikel)
            <div class="bg-white rounded-lg shadow-md p-4 flex flex-col">

                <div class="w-full h-40 mb-3">
                    <iframe src="{{ $artikel->gambar }}"
                            class="w-full h-full rounded-md"
                            frameborder="0"
                            allowfullscreen>
                    </iframe>
                </div>

                <h2 class="font-semibold text-lg mb-2">{{ $artikel->judul }}</h2>

                <p class="text-sm text-gray-500 mb-2">
                    Updated {{ $artikel->updated_at->diffForHumans() }}
                </p>

                <a href="{{ route('artikel.show', $artikel->id) }}"
                   class="mt-auto text-blue-500 hover:underline font-medium">
                    Lihat Detail →
                </a>
            </div>
        @endforeach
    </div>

    {{-- pagination --}}
    <div class="mt-6">
        {{ $articles->links() }}
    </div>
</section>
@endsection
