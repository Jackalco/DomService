<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Informations sur le repassage.">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/services.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services - Repassage</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section id="service">
                <div id="summaryService">
                    <a class="summaryItem" href="{{ route('servicing') }}">Entretien du logement</a>
                    <a class="summaryItem activeSummaryItem" href="{{ route('ironing') }}">Repassage</a>
                    <a class="summaryItem" href="{{ route('help-seniors') }}">Aide aux seniors</a>
                    <a class="summaryItem" href="{{ route('shopping') }}">Courses et accompagnement sorties</a>
                    <a class="summaryItem" href="{{ route('concierge') }}">Conciergerie</a>
                    <a class="summaryItem" href="{{ route('relationship-providers') }}">Mise en relation avec nos prestataires</a>
                </div>
                <div id="textService">
                    <div class="itemTextService">
                        <h1>Repassage</h1>
                        <p>
                            La mission de nos assistant(e)s de vie est aussi d’assurer le lavage des vitres, le nettoyage des vêtements (programme des lessives, étendre le linge), le repassage du linge (cintré ou plié), le rangement des espaces à vivre (cuisine, chambre, salon, toilettes). L’objectif est de s’assurer que la maison reste un espace toujours propre et agréable à vivre que ce soit pour les personnes accompagnées et la visite de leurs proches. 
                        </p>
                        <p>
                            Vous bénéficiez d’un service de repassage à domicile professionnel et personnalisé selon vos besoins. Quelle que soit la quantité de linge que vous avez à laver et repasser, l'ABE ou l'ABES  veille à entretenir vos textiles comme une vraie professionnelle. 
                        </p>
                    </div>
                </div>
                <img src="{{ asset('images/ironing.jpg') }}" class="imageServices" alt="Image repassage">
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>