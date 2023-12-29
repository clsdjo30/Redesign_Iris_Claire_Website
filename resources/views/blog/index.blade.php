@extends('layout')

@section('content')

   @include('components.breadcrump')
    <div class="w-full flex flex-col justify-center items-center bg-purple-50 pt-6 gap-4">
        <h1 class="w-full text-5xl text-purple-600 font-bold text-center "> Le Blog d'Iris Claire </h1>
        <h2 class="text-center text-2xl text-purple-900 font-thin"> Tous les sujets du moment sur notre blog : astrologie, horoscope,
            spiritualité, rituel, développement personnel…</h2>

    </div>
    <div class="w-full flex flex-col justify-center lg:flex-row lg:py-12 pt-6 bg-purple-50 ">
        <section class="w-full lg:w-2/3">

            <header class="pb-6 lg:pb-12">
                <!-- Top Post-->
                <section class="w-full justify-center">
                    @foreach($posts as $post)
                        @if($post->is_ahead === 1)
                            <article class=" h-3/4 border border-violet-900 flex flex-col justify-center items-center mx-6 rounded-xl lg:ml-10
                             overflow-hidden transition-transform mt-5">
                                <div class="w-full relative">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                    <img
                                        src="{{ asset('storage/' . $post->thumbnail) }}"
                                        alt="{{  $post->alt_description}}"
                                        class="w-full  h-54 lg:h-96 w-full object-fill object-top  rounded-t-lg"
                                    />
                                    @foreach($post->categories as $category)
                                        <div
                                            class="absolute bottom-5 w-1/3 flex p-1 bg-white justify-center content-center font-semibold text-orange-400 ">
                                            {{ $category->name }}
                                        </div>
                                    @endforeach
                                    </a>
                                </div>
                                <div class="w-full relative mt-3 flex flex-col justify-start px-5">
                                    <div class="relative w-full ">
                                        <h2 class="lg:text-4xl font-bold text-violet-800">{{$post->title}}</h2>
                                        <p class="text-sm lg:text-lg font-light mt-3 text-violet-900">{{$post->excerpt}}</p>
                                    </div>
                                    <div class="place-self-end mb-3">
                                        <button
                                            class="mt-5 mx-auto text-violet-900 font-semibold rounded-full bg-violet-100 border-0 py-1 px-8 focus:outline-none hover:bg-violet-600 hover:text-violet-100 text-lg">
                                            <a href="{{ route('blog.show', $post->slug) }}" class="text-sm">
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
                <section class="w-full flex flex-col lg:flex-row mt-5 gap-6">
                    @foreach($posts as $post)
                        @if($post->is_second === 1)
                            <article class="border border-violet-900 flex flex-col justify-center items-center mx-6 rounded-xl  md:4/6
                overflow-hidden transition-transform h-auto lg:ml-10">
                                <div class="relative w-full ">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                    <img
                                        src="{{ Storage::url($post->thumbnail) }}"
                                        alt="{{  $post->alt_description}}"
                                        class="w-full h-54 object-cover object-top  rounded-t-lg"
                                    />
                                        @foreach($post->categories as $category)
                                    <div
                                        class="absolute bottom-5 w-1/3 flex p-1 bg-white justify-center content-center font-semibold text-orange-400 ">
                                            {{ $category->name }}
                                    </div>
                                        @endforeach
                                    </a>
                                </div>
                                <div class="flex flex-col flex-grow px-5 py-3">
                                    <div>
                                        <h2 class="text-base font-bold text-violet-800">{{$post->title}}</h2>
                                        <p class="text-sm font-light mt-3 text-violet-900">{{$post->excerpt}}</p>
                                    </div>
                                    <div class="place-self-end  ">
                                        <button
                                            class="mt-5 mx-auto text-violet-900 font-semibold rounded-full bg-violet-100 border-0 py-1 px-8 focus:outline-none hover:bg-violet-600 hover:text-violet-100 text-lg">
                                            <a href="{{ route('blog.show', $post->slug) }}" class="text-sm">
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
                                class="object-cover object-top h-54 w-96 lg:h-48 rounded-t-lg"
                            />
                            @foreach($post->categories as $category)
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
                                    <a href="{{ route('blog.show', $post->slug) }}" class="text-sm">
                                        Lire la suite
                                    </a>
                                </button>
                            </div>
                        </div>
                    </article>
                    {{-- Fin du post --}}
                @endforeach
                <div class="mt-8">
                    {{ $posts->links() }}
                </div>
            </section>
        </section>
        @include('components.blog-aside')
    </div>

@endsection
