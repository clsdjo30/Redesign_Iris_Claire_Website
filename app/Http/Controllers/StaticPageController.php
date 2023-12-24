<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;


class StaticPageController extends Controller
{


    public function welcome()
    {
        SEOTools::macro('homePage', function (string $url, string $title, string $description) {

            SEOMeta::setTitle($title)
                ->setDescription($description)
                ->setCanonical($url)
                ->addKeyword('tarot divinatoire, application mobile, voyance tarologie, réponses instantanées, consultation tarot, voyance premium, clairvoyance en ligne, guidance spirituelle, avenir amoureux, tarologie professionnelle');

            OpenGraph::setTitle($title)
                ->setDescription($description)
                ->addImage(asset('image/opengraph.jpg'))
                ->setUrl($url)
                ->addProperty('type', 'website');

            TwitterCard::setDescription($description);

            JsonLd::setType('website')
                ->setImage(asset('image/opengraph.jpg'))
                ->setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->setSite($url);
        });
        SEOTools::homePage(
            'https://irisclaire.fr/',
            'Voyance Précise et Rapide – Posez Vos Questions sur l’App Iris Claire',
            "Avec l'App Iris Claire, obtenez une voyance tarologie instantanée pour toutes vos préoccupations. Posez votre question et recevez une guidance précise – Service premium, réponse immédiate."
        );

        return view('welcome');
    }

    public function team()
    {
        SEOTools::macro('teamPage', function (string $url, string $title, string $description, string $keyword) {

            SEOMeta::setTitle($title)
                ->setDescription($description)
                ->setCanonical($url)
                ->addKeyword($keyword);

            OpenGraph::setTitle($title)
                ->setDescription($description)
                ->addImage(asset('image/opengraph.jpg'))
                ->setUrl($url)
                ->addProperty('type', 'website');

            TwitterCard::setDescription($description);

            JsonLd::setType('website')
                ->setImage(asset('image/opengraph.jpg'))
                ->setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->setSite($url);
        });

        SEOTools::teamPage(
            'https://irisclaire.fr/team',
            "Rencontrez l'Équipe de Iris Claire – Experts en Tarot Divinatoire et Voyance",
            "Découvrez les visages derrière Iris Claire, une équipe d'experts passionnés par le tarot et la clairvoyance. Apprenez-en plus sur nos voyants professionnels qui utilisent leur intuition et expertise pour vous guider sur votre chemin de vie. Rejoignez notre communauté et profitez d'une voyance de qualité.",
            "équipe de voyance, experts en tarot, professionnels de la clairvoyance, voyants Iris Claire, communauté de tarot, voyance de qualité"
        );


        return view('team');
    }

    public function contact()
    {
        SEOTools::macro('contactPage', function (string $url, string $title, string $description, string $keyword) {

            SEOMeta::setTitle($title)
                ->setDescription($description)
                ->setCanonical($url)
                ->addKeyword($keyword);

            OpenGraph::setTitle($title)
                ->setDescription($description)
                ->addImage(asset('image/opengraph.jpg'))
                ->setUrl($url)
                ->addProperty('type', 'website');

            TwitterCard::setDescription($description);

            JsonLd::setType('website')
                ->setImage(asset('image/opengraph.jpg'))
                ->setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->setSite($url);
        });

        SEOTools::contactPage(
            'https://irisclaire.fr/contact',
            "Contactez Iris Claire – Disponibilité Immédiate pour vos Consultations de Tarot",
            "Prêt pour une expérience de voyance personnalisée ? Contactez Iris Claire dès maintenant pour planifier votre consultation de tarot divinatoire. Notre équipe de voyants experts est à votre disposition pour vous offrir des conseils spirituels et des réponses claires à vos questions les plus pressantes.",
            " consultation de tarot, voyance personnalisée, contact voyant, guidance spirituelle, questions de tarot, Iris Claire"
        );


        return view('contact');
    }

    public function legal()
    {
        SEOTools::macro('legalPage', function (string $url, string $title, string $description, string $keyword) {

            SEOMeta::setTitle($title)
                ->setDescription($description)
                ->setCanonical($url)
                ->addKeyword($keyword);

            OpenGraph::setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->addImage(asset('image/opengraph.jpg'))
                ->addProperty('type', 'website');

            TwitterCard::setDescription($description);

            JsonLd::setType('website')
                ->setImage($url)
                ->setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->setSite('Iris Claire, Voyance Précise et Rapide');
        });
        SEOTools::legalPage(
            'https://irisclaire.fr/mentions-legales',
            "Mentions Légales – Iris Claire, Tarot Divinatoire en Ligne",
            "Parcourez les mentions légales pour une transparence totale sur Iris Claire. Découvrez nos conditions d'utilisation, informations juridiques et responsabilités en tant que fournisseur de services de tarot divinatoire et de voyance en ligne.",
            "mentions légales, informations juridiques, tarot en ligne, responsabilité, services de voyance, Iris Claire"
        );

        return view('mentions-legales');
    }

    public function policy()
    {
        SEOTools::macro('policyPage', function (string $url, string $title, string $description, string $keyword) {

            SEOMeta::setTitle($title)
                ->setDescription($description)
                ->setCanonical($url)
                ->addKeyword($keyword);

            OpenGraph::setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->addImage(asset('image/opengraph.jpg'))
                ->addProperty('type', 'website');

            TwitterCard::setDescription($description);

            JsonLd::setType('website')
                ->setImage($url)
                ->setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->setSite('Iris Claire, Voyance Précise et Rapide');
        });
        SEOTools::policyPage(
            'https://irisclaire.fr/privacy-policy',
            "Politique de Confidentialité – Protection des Données chez Iris Claire",
            "Votre vie privée est sacrée chez Iris Claire. Lisez notre politique de confidentialité pour comprendre comment nous protégeons et gérons vos données personnelles dans le respect de votre intimité et de la législation en vigueur.",
            "politique de confidentialité, protection des données, confidentialité, vie privée, gestion des données personnelles, Iris Claire"
        );

        return view('privacy-policy');
    }

    public function condition()
    {
        SEOTools::macro('conditionPage', function (string $url, string $title, string $description, string $keyword) {

            SEOMeta::setTitle($title)
                ->setDescription($description)
                ->setCanonical($url)
                ->addKeyword($keyword);

            OpenGraph::setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->addImage(asset('image/opengraph.jpg'))
                ->addProperty('type', 'website');

            TwitterCard::setDescription($description);

            JsonLd::setType('website')
                ->setImage($url)
                ->setTitle($title)
                ->setDescription($description)
                ->setUrl($url)
                ->setSite('Iris Claire, Voyance Précise et Rapide');
        });
        SEOTools::conditionPage(
            'https://irisclaire.fr/conditions-generales-de-ventes',
            "Conditions Générales – Iris Claire, Votre Compagnon de Voyance",
            "Consultez les Conditions Générales de Vente et d'Utilisation (CGV/CGU) d'Iris Claire pour une compréhension claire de nos termes de service. Nous nous engageons à fournir une expérience client transparente et équitable.",
            "conditions générales, CGV, CGU, termes de service, expérience de voyance, Iris Claire"
        );


        return view('conditions-generales-de-ventes');
    }
}
