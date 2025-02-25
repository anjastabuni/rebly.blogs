@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    <div class="max-w-4xl mx-auto mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Daftar Artikel</h1>
            <a href="{{ route('posts.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                + Buat Artikel
            </a>
        </div>

        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">

                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800">
                        <a href="{{ route('posts.show', $post->slug) }}" class="hover:underline">{{ $post->title }}</a>
                    </h2>
                    <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 100) }}</p>
                    <div class="flex justify-between items-center mt-4">
                        <a href="{{ route('posts.show', $post->slug) }}" class="text-blue-500 hover:underline">
                            Baca Selengkapnya
                        </a>
                        <div class="flex space-x-2">
                            <a href="{{ route('posts.edit', $post->slug) }}" class="text-yellow-500 hover:underline">
                                Edit
                            </a>
                            <form action="{{ route('posts.destroy', $post->slug) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
