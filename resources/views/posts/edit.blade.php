@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6 mt-6">
        <h1 class="text-2xl font-semibold mb-4 text-gray-800">Edit Artikel</h1>

        <form action="{{ route('posts.update', $post->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Input Judul -->
            <div>
                <label for="title" class="block text-gray-700 font-medium">Judul</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:border-indigo-500"
                    required>
            </div>

            <!-- Input Konten -->
            <div>
                <label for="content" class="block text-gray-700 font-medium">Isi Artikel</label>
                <textarea id="content" name="content" rows="5"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:border-indigo-500" required>{{ old('content', $post->content) }}</textarea>
            </div>

            <!-- Upload Gambar -->
            <div>
                <label for="image" class="block text-gray-700 font-medium">Upload Gambar Baru</label>
                <input type="file" id="image" name="image"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:border-indigo-500">
            </div>

            <!-- Preview Gambar Lama -->
            @if ($post->image)
                <div class="mt-4">
                    <p class="text-gray-700 font-medium">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Artikel"
                        class="w-full h-48 object-cover rounded-lg mt-2">
                </div>
            @endif

            <!-- Tombol Update -->
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-lg hover:bg-indigo-700 transition duration-200">
                    Update Artikel
                </button>
            </div>
        </form>
    </div>
@endsection
