@extends('app')

@section('title', 'Add New Page')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white shadow rounded">
    <h2 class="text-2xl font-bold mb-4">Tambah Destinasi Wisata 360°</h2>

    @if(session('success'))
        <div class="p-3 bg-green-200 text-green-800 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('vr_page.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Judul -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Judul</label>
            <input type="text" name="judul" class="w-full border rounded p-2" required>
        </div>

        <!-- Text (TinyMCE) -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="deskripsi" id="editor" rows="10" class="w-full border rounded p-2"></textarea>
        </div>

        <!-- Gambar -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Gambar 360°</label>
            <input type="file" name="gambar" class="w-full border rounded p-2" accept="image/*" required>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">
            Simpan
        </button>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
@endsection

@push('scripts')
<script src="https://cdn.tiny.cloud/1/kpp26jmqwgc3jwyaal4x0hord83c38xbqbn4zqqrgu2z33jf/tinymce/6/tinymce.min.js" crossorigin="anonymous"></script>
<script>
    tinymce.init({
        selector: '#editor',
        plugins: 'link image media table code lists',
        toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image media | code',
        menubar: false,
        setup: function (editor) {
            editor.on('change', function () {
                editor.save(); // isi TinyMCE ditulis ke textarea hidden
            });
        }
    });
</script>
@endpush
