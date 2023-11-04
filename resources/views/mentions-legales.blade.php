@extends('layout')

@section('content')
    <section class="py-8">
    <div class=" mt-10 mx-4 align-center text-justify">
    <h1
        class="text-center text-4xl lg:text-3xl font-bold text-violet-900 lg:tracking-tight">
        Mentions Légales
    </h1>

    <div class=" mx-auto max-w-4xl mt-8 mb-56">

        <p class="text-base leading-relaxed text-slate-500 mt-3">
            Ce site est édité par DIGITALFY société par actions simplifiée au
            capital de 8000 euros, immatriculée au RCS de LILLE METROPOLE sous
            le numéro 509 233 961 dont le siège social est situé , résidant 99 Avenue Achille Peretti
            , 9220 Neuilly-sur-Seine.
        </p>
        <p class="text-base leading-relaxed text-slate-500 mt-3">
            L’utilisateur pourra contacter la société également
            <a href="/contact" class="text-blue-600 visited:text-purple-600 hover:text-orange-400">en ligne</a>.
        </p>
        <p class="text-base leading-relaxed text-slate-500 mt-3">Numéro de TVA : FR 07509233961.</p>
        <p class="text-base leading-relaxed text-slate-500 mt-3">
            Le directeur de la publication est Monsieur Cédric Le Sergent.
        </p>
        <p class="text-base leading-relaxed text-slate-500 mt-3">
            Ce site est hébergé par la société Vercel Inc., située 340 S Lemon
            Ave #4133 Walnut, CA 91789, et joignable au (559) 288-7060.
        </p>

    </div>
    </div>
    </section>
@endsection
