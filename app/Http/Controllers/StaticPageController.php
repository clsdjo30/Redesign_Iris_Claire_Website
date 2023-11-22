<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;


class StaticPageController extends Controller
{


    public function welcome()
    {
        // Configuration des métadonnées SEO
        SEOMeta::setTitle('Voyance Précise et Rapide – Posez Vos Questions sur l’App Iris Claire');
        SEOMeta::setDescription("Avec l'App Iris Claire, obtenez une voyance tarologie instantanée pour toutes vos préoccupations. Posez votre question et recevez une guidance précise – Service premium, réponse immédiate.");
        SEOMeta::setCanonical('https://irisclaire.fr/');
        SEOMeta::addKeyword('tarot divinatoire, application mobile, voyance tarologie, réponses instantanées, consultation tarot, voyance premium, clairvoyance en ligne, guidance spirituelle, avenir amoureux, tarologie professionnelle');

        OpenGraph::setTitle('Voyance Précise et Rapide – Posez Vos Questions sur l’App Iris Claire');
        OpenGraph::setDescription("Avec l'App Iris Claire, obtenez une voyance tarologie instantanée pour toutes vos préoccupations. Posez votre question et recevez une guidance précise – Service premium, réponse immédiate.");
        OpenGraph::setUrl('https://votre-url.com/');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle('Voyance Précise et Rapide – Posez Vos Questions sur l’App Iris Claire');
        TwitterCard::setDescription("Avec l'App Iris Claire, obtenez une voyance tarologie instantanée pour toutes vos préoccupations. Posez votre question et recevez une guidance précise – Service premium, réponse immédiate.");

        return view('welcome');
    }

    public function team() {

        SEOMeta::setTitle('Iris Claire - La Team - Votre application de tarot divinatoire de poche');
        SEOMeta::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        SEOMeta::setCanonical('https://irisclaire.fr/');
        SEOMeta::addKeyword('tarot divinatoire, application mobile');

        OpenGraph::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        OpenGraph::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        OpenGraph::setUrl('https://votre-url.com/');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        TwitterCard::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");

        return view('team');
    }

    public function contact() {

        SEOMeta::setTitle('Iris Claire - Contact - Votre application de tarot divinatoire de poche');
        SEOMeta::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        SEOMeta::setCanonical('https://irisclaire.fr/');
        SEOMeta::addKeyword('tarot divinatoire, application mobile');

        OpenGraph::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        OpenGraph::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        OpenGraph::setUrl('https://votre-url.com/');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        TwitterCard::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");

        return view('contact');
    }

    public function legal() {

        SEOMeta::setTitle('Iris Claire - Mentions Légales - Votre application de tarot divinatoire de poche');
        SEOMeta::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        SEOMeta::setCanonical('https://irisclaire.fr/');
        SEOMeta::addKeyword('tarot divinatoire, application mobile');

        OpenGraph::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        OpenGraph::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        OpenGraph::setUrl('https://votre-url.com/');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        TwitterCard::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");

        return view('mentions-legales');
    }

    public function policy() {

        SEOMeta::setTitle('Iris Claire - politique de confidentialité - Votre application de tarot divinatoire de poche');
        SEOMeta::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        SEOMeta::setCanonical('https://irisclaire.fr/');
        SEOMeta::addKeyword('tarot divinatoire, application mobile');

        OpenGraph::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        OpenGraph::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        OpenGraph::setUrl('https://votre-url.com/');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        TwitterCard::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");

        return view('privacy-policy');
    }

    public function condition() {
        SEOMeta::setTitle('Iris Claire - CGV/CGU - Votre application de tarot divinatoire de poche');
        SEOMeta::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        SEOMeta::setCanonical('https://irisclaire.fr/');
        SEOMeta::addKeyword('tarot divinatoire, application mobile');

        OpenGraph::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        OpenGraph::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
        OpenGraph::setUrl('https://votre-url.com/');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
        TwitterCard::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");

        return view('conditions-generales-de-ventes');
    }
}
