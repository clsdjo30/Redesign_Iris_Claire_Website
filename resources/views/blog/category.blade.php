{{-- category.blade.php --}}
@extends('layout')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold my-4">Articles dans la catégorie : {{ $category->name }}</h1>

        {{-- Afficher les articles de la catégorie --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($posts as $post)
                <div class="border rounded-lg p-4">
                    <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
                    <p class="text-gray-600">{{ $post->excerpt }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-500 hover:underline">Lire la suite</a>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="my-4">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

