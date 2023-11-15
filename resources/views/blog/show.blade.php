@extends('layout')

@section('content')

    <div class="flex flex-col justify-center  gap-4 py-12">
        <h1 class="w-full text-5xl text-purple-600 font-bold text-center "> Le Blog d'Iris Claire </h1>
        <h2 class="text-center text-2xl text-purple-900 font-thin text-center "> Tous les sujets du moment sur notre blog : astrologie, horoscope,
            spiritualité, rituel, développement personnel…</h2>
    </div>
    <div class="w-full flex flex-col lg:flex-row justify-center lg:px-12 lg:py-12 pt-6 lg:mt-12 bg-purple-50">

        <section class="w-full lg:w-8/12">
            <header class="pb-6 lg:pb-12">
                <!-- Top Post-->
                <section class="w-full">
                    <div class="w-2/3">
                        <h1 class=" text-left text-4xl font-bold text-violet-800 mb-2">
                            {{ $post->title }}
                        </h1>
                        <div class="w-full flex justify-start items-center text-orange-500 mb-10">
                            <p class="mr-6"><span class="text-purple-700">Ecrit par: </span>{{ $post->auteur->name  }}</p>
                            <p>{{$post->created_at->format('d/m/Y')}}</p>
                        </div>
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
                        <div class="social-share-buttons flex flex-row justify-end gap-4 items-center">
                            <!-- Bouton de partage Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank">Partager sur
                                Facebook</a>

                            <!-- Bouton de partage Twitter -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ urlencode($post->title) }}"
                               target="_blank">Partager sur Twitter</a>
                        </div>
                    </div>
                </section>
                <!--End top Post-->

            </header>

        </section>
        <section class="lg:w-3/12 justify-center lg:ml-24 px-6 pb-12 lg:px-12 ">

            <aside class=" flex flex-col mt-10 lg:mt-5">
                <!-- bloc Last Post -->
                <div
                    class="flex flex-col bg-purple-100 px-2 py-3 rounded-md border mb-10">
                    <h3 class="text-xl font-semibold text-purple-900 mb-3 ml-4">
                        Articles Recents
                    </h3>
                    @foreach ($latestPosts as $post)
                        <div class="mb-3">
                            <!-- Affichage de chaque post -->
                            <ul class="list-disc ml-8 my-1">
                                <li class="text-base font-regular text-purple-900 hover:text-orange-500">
                                    <a href="{{ route('blog.show', $post) }}">
                                        {{ $post->title }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endforeach

                </div>
                <!-- banniere pub iris -->
                <div class="w-full px-2 md:px-3">
                    <div
                        class="bg-gradient-to-r from-violet-700 from-10% via-violet-800 to-violet-900 to-70% py-3 px-2 rounded-md">
                        <h3 class="mt-10 text-xl font-bold text-violet-100 text-center">
                            Votre compagnon divinatoire personnalisé
                        </h3>
                        <div class="w-full h-full mt-10">
                            <img src="{{asset('images/header.png')}}" alt="Application Iris claire sur mobile" class="object-cover h-64"/>
                        </div>
                        <div class="mb-6">
                            <p class="text-sm mt-4 text-violet-200 max-w-xl text-justify">
                                Plongez dans votre avenir et découvrez les mystères qui
                                l'entourent ! Vous obtiendrez des réponses qui vont aideront à
                                mieux vous comprendre et à prendre des décisions.
                            </p>
                            <div class="w-full mt-20 flex flex-col gap-5">
                                <button
                                    class="flex mx-auto text-violet-900 font-semibold rounded-full bg-violet-100 border-0 py-2 px-16 focus:outline-none hover:bg-violet-600 hover:text-violet-100 text-lg">
                                    App Store
                                </button>
                                <button
                                    class="flex mx-auto text-violet-900 font-semibold rounded-full bg-violet-100 border-0 py-2 px-16 focus:outline-none hover:bg-violet-600 hover:text-violet-100 text-lg">
                                    Play Store
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bloc Category -->
                <div
                    class="flex flex-col bg-purple-100 px-2 py-3 rounded-md border mt-10">
                    <h3 class="text-xl font-semibold text-purple-900 mb-3 ml-1">
                        Catégories
                    </h3>
                    @foreach($categories as $category)
                        <ul class="list-disc ml-8 my-1">
                            <li class="text-md font-light text-purple-900 hover:text-orange-500">
                                <a href="">
                                    {{ $category->name}}
                                </a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </aside>

        </section>
    </div>

@endsection
