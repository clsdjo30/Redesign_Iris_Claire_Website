{{-- category.blade.php --}}
@extends('layout')

@section('content')
    <div class="container mx-auto">
        @include('components.breadcrump')
        <div class="w-full flex flex-col justify-center items-center bg-purple-50 pt-6 gap-4">
            <h1 class="text-5xl text-purple-600 font-bold text-center">{{ $category->name }}</h1>
            <h2 class="text-2xl text-purple-900 font-thin text-center px-2">{{ $category->description }}</h2>
        </div>
        <div class="w-full flex flex-col lg:flex-row justify-center lg:py-12 pt-6 bg-purple-50">
            <section class="w-full lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-4 lg:ml-6 auto-rows-min px-5">
                @foreach($posts as $post)
                    {{-- Début du post --}}
                    <article class="flex flex-col border border-violet-900 rounded-xl transition-transform mt-5">
                        <div class="relative">
                            <a href="{{ route('blog.show', $post->slug) }}">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->alt_description }}" class="object-cover object-top rounded-t-lg" />
                            @foreach($post->categories as $category)
                                <div class="absolute bottom-5 w-1/3 flex p-1 bg-white justify-center content-center font-semibold text-orange-400">
                                    {{ $category->name }}
                                </div>
                            @endforeach
                            </a>
                        </div>
                        <div class="flex flex-col flex-grow px-5 py-3">
                            <h2 class="text-base font-bold text-violet-800">{{ $post->title }}</h2>
                            <p class="text-sm font-light mt-3 text-violet-900 flex-grow">{{ $post->excerpt }}</p>
                            <div class="place-self-end">
                                <button class="mt-5 text-violet-900 font-semibold rounded-full bg-violet-100 border-0 py-1 px-8 focus:outline-none hover:bg-violet-600 hover:text-violet-100">
                                    <a href="{{ route('blog.show', $post->slug) }}" class="text-sm">Lire la suite</a>
                                </button>
                            </div>
                        </div>
                    </article>
                    {{-- Fin du post --}}
                @endforeach
            </section>

            @include('components.blog-aside')
        </div>
    </div>
@endsection
