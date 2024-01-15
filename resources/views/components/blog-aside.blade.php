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
                class="flex-col justify-center items-center bg-gradient-to-r from-violet-700 from-10% via-violet-800 to-violet-900 to-70% py-3 px-2
                 rounded-md">
                <h3 class="mt-10 text-2xl font-bold text-violet-100 text-center">
                    Votre compagnon divinatoire personnalisé
                </h3>
                <div class="w-full h-full mt-10">
                    <img src="{{asset('images/header.webp')}}" alt="Application Iris claire sur mobile" class="object-cover h-64"/>
                </div>
                <div class="mb-6  flex flex-col justify-center items-center px-5">
                    <p class="text-md mt-4 text-violet-200 max-w-xl text-justify">
                        Plongez dans votre avenir et découvrez les mystères qui
                        l'entourent ! Vous obtiendrez des réponses qui vont aideront à
                        mieux vous comprendre et à prendre des décisions.
                    </p>
                    <div class="w-full mt-10 flex justify-center">
                        <a href='https://play.google.com/store/apps/details?id=com.digitalFy.IrisClaireApp&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'
                            class="flex justify-center"
                            target="_blank"
                        >
                            <img alt='Disponible sur Google Play'
                                 src='https://play.google.com/intl/en_us/badges/static/images/badges/fr_badge_web_generic.png'
                                 class="w-2/4"
                            />
                        </a>
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
