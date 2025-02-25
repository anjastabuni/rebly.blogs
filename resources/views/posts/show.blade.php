@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>

        <!-- Gambar Artikel -->
        @if ($post->image)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar {{ $post->title }}"
                    class="w-full h-64 object-cover rounded-lg shadow">
            </div>
        @endif

        <!-- Konten Artikel -->
        <div class="text-gray-700 leading-relaxed text-lg">
            <p>{{ $post->content }}</p>
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-6">
            <a href="{{ route('posts.index') }}"
                class="inline-block bg-gray-800 text-white font-semibold px-4 py-2 rounded-lg shadow hover:bg-gray-700 transition duration-200">
                &larr; Kembali ke Daftar Artikel
            </a>
        </div>
    </div>
@endsection
