@extends('layout')

@section('content')

        <h1 class="w-full text-3xl text-center">  Le Blog d'Iris Claire </h1>
<div class="w-full flex justify-center px-12 mt-12">

    <section class="w-3/4 mx-12 ">
       <header class="pb-12">
           <!-- Top Post-->
           <section class="w-full h-44 bg-gray-500 flex justify-center items-center">
               1
           </section>
           <!--End top Post-->
           <!-- Bottom Two post-->
           <section class="w-full flex flex-row gap-4 mt-4">
               <div class="w-full h-44 bg-gray-500 flex justify-center items-center">2</div>
               <div class="w-full h-44 bg-gray-500 flex justify-center items-center">3</div>
           </section>
           <!--End Of Bottom Two post-->
       </header>
        <section class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="space-y-10 md:space-y-16">
                @foreach($posts as $post)
                    {{-- Début du post --}}
                    <article class="flex flex-col lg:flex-row pb-10 md:pb-16 border-b">
                        <div class="lg:w-5/12">
                            <img class="w-full max-h-72 object-cover lg:max-h-none lg:h-full" src="{{ $post->thumbnail }}" alt="{{ $post->alt_description }}">
                        </div>
                        <div class="flex flex-col items-start mt-5 space-y-5 lg:w-7/12 lg:mt-0 lg:ml-12">
                            <a href="" class="underline font-bold text-slate-900 text-lg">Catégorie</a>
                            <h1 class="font-bold text-slate-900 text-3xl lg:text-5xl leading-tight">{{ $post->title }}</h1>
                            <ul class="flex flex-wrap gap-2">
                                <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 1</a></li>
                                <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 2</a></li>
                            </ul>
                            <p class="text-xl lg:text-2xl text-slate-600">
                                {{ $post->excerpt }}
                            </p>
                            <a href="" class="flex items-center py-5 px-7 font-semibold bg-slate-900 transition text-slate-50 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                                Lire l'article
                            </a>
                        </div>
                    </article>
                    {{-- Fin du post --}}
                @endforeach
            </div>
        </section>
    </section>
    <aside class="w-1/4 mx-4">
        <div class="h-full bg-indigo-50">menu coté</div>
    </aside>
</div>



@endsection
