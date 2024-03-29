<section class="bg-violet-100 pb-12">
    <div class="xl:mx-auto xl:container xl:px-24 md:px-6 px-4 py-12">
        <h2 class="lg:text-5xl text-3xl font-extrabold leading-9 text-violet-800 text-center">
            Votre Tarot Divinatoire Personnel
        </h2>
        <div class="flex items-center justify-center">
            <div class="relative hidden lg:block lg:w-8/12 w-full lg:mt-0 mt-6">
                <!-- Assurez-vous de remplacer les valeurs de largeur et de hauteur par celles de vos images réelles -->
                <img src="{{ asset('images/bg-pattern-3.webp') }}" alt="élément de décoration écran mobile avec des cartes"
                     class="w-full object-fit object-center object-fill h-full"
                     width="1200"
                     height="800"
                     loading="lazy"
                />
                <img src="{{ asset('images/game_info.webp') }}" alt="écran de mobile avec des cartes"
                     class="absolute w-10/12 top-10 left-12"
                     width="800"
                     height="600"
                     loading="lazy"
                />
            </div>
            <div class="w-10/12 lg:w-8/12">
                <div class="lg:hidden lg:w-3/5 xl:w-3/5 w-full lg:mt-0 mt-6 mb-20">
                    <img src="{{ asset('images/bg-pattern-3.webp') }}" alt="élément de décoration écran mobile avec des cartes"
                         class="w-full object-fit object-center object-fill h-full"
                         width="1200"
                         height="800"
                         loading="lazy"
                    />
                    <img src="{{ asset('images/game_info.webp') }}" alt="écran de mobile avec des cartes"
                         class="relative w-9/12 -top-64 left-10"
                         width="800"
                         height="600"
                         loading="lazy"
                    />
                </div>
                <!-- Blocs de contenu textuel avec des images d'étoiles comme icônes -->
                <div class="flex flex-col gap-2 lg:mt-6 2xl:mt-8">
                    @foreach ([
                        'Voyance Tarot Divinatoire par Iris Claire' => 'Plongez dans l\'univers d\'Iris Claire, où le tarot divinatoire se révèle dans toute son authenticité et sa modernité. Notre service de voyance vous offre des réponses claires et précises, vous aidant à naviguer dans les eaux de l\'amour, de la carrière et du bien-être. Avec Iris Claire, accédez à une expérience de tarot divinatoire enrichissante, conçue pour éclairer chaque étape de votre vie.',
                        'Guidance de Vie avec le Tarot Divinatoire' => 'Le tarot divinatoire d\'Iris Claire est plus qu\'un simple jeu de cartes; c\'est une boussole pour votre vie. Nos lectures de tarot vous apportent des perspectives précieuses et des conseils avisés dans tous les domaines de votre existence. Faites l\'expérience d\'une voyance tarot divinatoire qui vous connecte avec votre avenir, vous offrant la clarté et la direction dont vous avez besoin.',
                        'Consultations Expertes en Tarot Divinatoire avec Iris Claire' => 'Accédez à la sagesse profonde du tarot divinatoire grâce à l\'expertise d\'Iris Claire. Nos spécialistes en voyance vous offrent des lectures personnalisées, révélant des insights précis pour éclairer votre chemin de vie. Embarquez dans un voyage de découverte personnelle avec notre tarot divinatoire, où des réponses immédiates et des conseils avisés vous attendent, peu importe où vous vous trouvez.'
                    ] as $title => $text)
                        <div class="flex items-center">
                            <div class="flex items-start flex-col ml-6 pt-4">
                                <div class="relative flex sm:justify-start items-center -left-14">
                                    <img src="{{ asset('icons/purple_star.webp') }}" class="w-10 h-10 mr-3" alt="icon étoile violette"
                                         width="40"
                                         height="40"
                                         loading="lazy"
                                    />
                                    <h2 class="text-xl font-semibold leading-6 text-violet-600">{{ $title }}</h2>
                                </div>
                                <p class="text-base leading-relaxed mt-2 text-violet-800">{{ $text }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
