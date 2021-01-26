<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/services.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section id="service">
                <div id="summaryService">
                    <a class="summaryItem" href="{{ route('servicing') }}">Entretien du logement</a>
                    <a class="summaryItem" href="{{ route('ironing') }}">Repassage</a>
                    <a class="summaryItem" href="{{ route('help-seniors') }}">Aide aux seniors</a>
                    <a class="summaryItem" href="{{ route('shopping') }}">Courses et accompagnement sorties</a>
                    <a class="summaryItem" href="{{ route('concierge') }}">Conciergerie</a>
                    <a class="summaryItem activeSummaryItem" href="{{ route('relationship-providers') }}">Mise en relation avec nos prestataires</a>
                </div>
                <div id="textService">
                    <div class="itemTextService">
                        <h1>Mise en relation avec nos prestataires</h1>
                        <p>
                            Grace à notre réseau de proximité nous pouvons vous proposer des prestataires.
                        </p>
                    </div>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>