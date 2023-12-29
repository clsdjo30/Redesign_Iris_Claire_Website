@extends('layout')

@section('content')
    <div class="container mx-auto">
    @include('components.breadcrump')
        <section class="w-full flex flex-col lg:flex-row justify-center items-center px-3 lg:px-12 lg:pt-6 pt-6 lg:pb-20 lg:mt-0 bg-purple-50">
            <article class="w-full bg-purple-50 gap-4 mt-3">
                <h1 class=" text-left text-4xl font-bold text-violet-800 mb-2">
                    {{ $post->title }}
                </h1>
                <div class="w-full flex justify-start items-center text-orange-500 mb-3">
                    <p class="mr-6"><span class="text-purple-700">Ecrit par: </span>{{ $post->auteur->name  }}</p>
                    <p>{{$post->created_at->format('d/m/Y')}}</p>
                </div>
                <div id="description" class="">
                    <img src="{{ asset('storage/'.$post->thumbnail) }}"
                         alt="{{ $post->alt_description }}"
                         class="mb-10"
                    >
                </div>

                <div id="post-content">
                    {!! $post->content !!}
                    <!--TODO ajouter la fonctionnalité  d'ajout de Like à l'aide des cookies -->
                    {{--                        <div class="social-share-buttons flex flex-row justify-end gap-4 items-center">--}}
                    {{--                            <form action="{{ route('blog.like', $post) }}" method="POST">--}}
                    {{--                                @csrf--}}
                    {{--                                <button type="submit" class="add-like" {{ $userHasLiked ? 'disabled' : '' }}>J'aime</button>--}}

                    {{--                            </form>--}}
                    {{--                            <p id="like-count">Nombre de J'aime : {{ $post->like_count }}</p>--}}
                    {{--                        </div>--}}
{{--                    <div class="social-share-buttons flex flex-row justify-end gap-4 items-center">--}}
{{--                        <!-- Bouton de partage Facebook -->--}}
{{--                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank">Partager sur--}}
{{--                            Facebook</a>--}}

{{--                        <!-- Bouton de partage Twitter -->--}}
{{--                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ urlencode($post->title) }}"--}}
{{--                           target="_blank">Partager sur Twitter</a>--}}
{{--                    </div>--}}
                </div>
            </article>
            @include('components.blog-aside')
        </section>
    </div>
@endsection
