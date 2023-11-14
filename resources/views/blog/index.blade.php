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
                    @foreach($posts as $post)
                        @if($post->is_ahead === 1)
                            <article class=" h-3/4 border border-violet-900 flex flex-col justify-center rounded-xl p-5 mx-5
                             overflow-hidden transition-transform mt-5">
                                <div class="w-full relative">
                                    <img
                                        src="{{ asset('storage/' . $post->thumbnail) }}"
                                        alt="{{  $post->alt_description}}"
                                        class="object-cover object-top  rounded-t-lg"
                                    />
                                    @foreach($categories as $category)
                                        <div
                                            class="absolute bottom-5 w-1/3 flex p-1 bg-white justify-center content-center font-semibold text-orange-400 ">
                                            {{ $category->name }}
                                        </div>
                                    @endforeach
                                </div>
                                <div class="w-full relative mt-3 flex flex-col justify-start">
                                    <div class="relative w-full ">
                                        <h2 class="lg:text-4xl font-bold text-violet-800">{{$post->title}}</h2>
                                        <p class="text-sm lg:text-lg font-light mt-3 text-violet-900">{{$post->excerpt}}</p>
                                    </div>
                                    <div class="w-full">
                                        <button
                                            class="mt-5 mx-auto text-violet-900 font-semibold rounded-full bg-violet-100 border-0 py-1 px-8 focus:outline-none hover:bg-violet-600 hover:text-violet-100 text-lg">
                                            <a href={`/blog/${categorySlug}/${slug}`} class="text-sm">
                                                Lire la suite
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                </section>
                <!--End top Post-->
                <!-- Bottom Two post-->
                <section class="w-full flex flex-col lg:flex-row gap-4 mt-4">
                    @foreach($posts as $post)
                        @if($post->is_second === 1)
                            <article class="border border-violet-900 flex flex-col justify-center items-center rounded-xl p-5 mx-5 md:4/6
                overflow-hidden transition-transform h-auto mt-5">
                                <div class="relative w-full ">
                                    <img
                                        src="{{ Storage::url($post->thumbnail) }}"
                                        alt="{{  $post->alt_description}}"
                                        class="object-cover object-top  rounded-t-lg"
                                    />
                                    <div
                                        class="absolute bottom-5 w-1/3 flex p-1 bg-white justify-center content-center font-semibold text-orange-400 ">
                                        @foreach($categories as $category)
                                            {{ $category->name }}
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mt-3 flex flex-col justify-start items-center">
                                    <div>
                                        <h2 class="text-base font-bold text-violet-800">{{$post->title}}</h2>
                                        <p class="text-sm font-light mt-3 text-violet-900">{{$post->excerpt}}</p>
                                    </div>
                                    <div class="w-full">
                                        <button
                                            class="mt-5 mx-auto text-violet-900 font-semibold rounded-full bg-violet-100 border-0 py-1 px-8 focus:outline-none hover:bg-violet-600 hover:text-violet-100 text-lg">
                                            <a href={`/blog/${categorySlug}/${slug}`} class="text-sm">
                                                Lire la suite
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach

                </section>
                <!--End Of Bottom Two post-->
            </header>
            <section class="grid grid-cols-1 gap-4 mt-10">
                <hr class="w-1/2 place-self-center bg-violet-900"/>
                <h3 class=" text-center text-2xl font-bold text-violet-800">
                    Tous nos articles
                </h3>


                @foreach($posts as $post)
                    {{-- Début du post --}}
                    <article class="border border-violet-900 flex flex-col lg:flex-row justify-center items-center rounded-xl p-5 mx-5 md:4/6
                overflow-hidden transition-transform h-auto mt-5">
                        <div class="relative lg:w-1/2 ">
                            <img
                                src="{{ asset('storage/' . $post->thumbnail) }}"
                                alt="{{  $post->alt_description}}"
                                class="object-cover object-top h-54 lg:h-48 rounded-t-lg"
                            />
                            @foreach($categories as $category)
                                <div class="absolute bottom-5 w-1/3 flex p-1 bg-white justify-center content-center font-semibold text-orange-400 ">
                                    {{ $category->name }}
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3 lg:w-1/2 flex flex-col justify-start items-center">
                            <div>
                                <h2 class="text-base font-bold text-violet-800">{{$post->title}}</h2>
                                <p class="text-sm font-light mt-3 text-violet-900">{{$post->excerpt}}</p>
                            </div>
                            <div class="w-full">
                                <button
                                    class="mt-5 mx-auto text-violet-900 font-semibold rounded-full bg-violet-100 border-0 py-1 px-8 focus:outline-none hover:bg-violet-600 hover:text-violet-100 text-lg">
                                    <a href={`/blog/${categorySlug}/${slug}`} class="text-sm">
                                        Lire la suite
                                    </a>
                                </button>
                            </div>
                        </div>
                    </article>
                    {{-- Fin du post --}}
                @endforeach

            </section>
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
                                    <a href="">
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
