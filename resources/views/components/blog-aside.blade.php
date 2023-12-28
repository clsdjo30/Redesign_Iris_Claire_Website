<section class="lg:w-1/3 justify-center px-6 pb-12">

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
                    <img src="{{asset('images/header.webp')}}" alt="Application Iris claire sur mobile" class="object-cover h-64"/>
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
            @foreach($showCategories as $category)
                <ul class="list-disc ml-8 my-1">
                    <li class="text-md font-light text-purple-900 hover:text-orange-500">
                        <a href="{{ route('blog.category', $category->name) }}">
                            {{ $category->name}}
                        </a>
                    </li>
                </ul>
            @endforeach
        </div>
    </aside>

</section>
