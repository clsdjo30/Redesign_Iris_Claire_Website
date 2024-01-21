<div class="w-full py-20 bg-gradient-to-r from-violet-700 from-10% via-violet-800 to-violet-900 to-70% lg:px-28">
    <div class="w-full flex flex-col items-center md:flex-row px-4 lg:mx-20">
        <div class="lg:order-2 ">
            <!-- Assurez-vous de connaître les dimensions exactes de votre image pour les ajouter ici -->
            <img class="object-cover h-96"
                 src="{{asset('images/header.webp')}}"
                 alt="sample page"
                 role="img"
                 width="800"
                 height="600"
                 loading="lazy"
            />
        </div>
        <div class="w-full px-4 lg:order-1 lg:w-1/2 lg:pl-28 flex flex-col justify-center lg:justify-end items-center gap-y-4 lg:gap-10">
            <h1 class="mt-4 w-full text-center lg:text-left text-4xl lg:text-6xl text-violet-200 font-sans font-bold">
                Voyance et tarot divinatoire
            </h1>

            <h2 class="w-full text-center lg:text-left text-lg lg:text-xl text-violet-200">
                Notre tarot divinatoire devient <span class="font-bold">mobile</span>: obtenez des réponses instantanées à vos questions de vie avec
                notre application de voyance.
            </h2>

            <div class="w-full flex justify-center lg:justify-start items-center">
                <a href='https://play.google.com/store/apps/details?id=com.digitalFy.IrisClaireApp&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'
                   class="flex justify-center"
                >
                    <!-- Utilisez les dimensions exactes pour l'image du badge Google Play -->
                    <img alt='Disponible sur Google Play'
                         src='https://play.google.com/intl/en_us/badges/static/images/badges/fr_badge_web_generic.png'
                         class="w-2/4 lg:w-2/5 "
                         width="135"
                         height="40"
                         loading="lazy"
                    />
                </a>
            </div>
        </div>
    </div>
</div>
