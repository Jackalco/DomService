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
                    <a class="summaryItem activeSummaryItem" href="{{ route('shopping') }}">Courses et accompagnement sorties</a>
                    <a class="summaryItem" href="{{ route('concierge') }}">Conciergerie</a>
                    <a class="summaryItem" href="{{ route('relationship-providers') }}">Mise en relation avec nos prestataires</a>
                </div>
                <div id="textService">
                    <div class="itemTextService">
                        <h1>Courses et accompagnement sorties</h1>
                        <p>
                            Le travail de nos auxiliaires de vie est d’assurer la réalisation des courses. Deux choix s’offrent aux bénéficiaires : l’auxiliaire de vie s’en charge seul si la personne est dans l’incapacité de se déplacer, temporairement ou durablement, ou conjointement si elle souhaite participer. Nos services prévoient le rangement des courses dans le logement et éviter tout risque de blessure ou chute. 
                        </p>
                        <p>
                            Ils respectent vos habitudes et se rendent avec vous dans vos commerces habituels. Sortie au bras ou véhiculée, à vous de nous faire part de vos besoins.   
                        </p>
                        <p>
                            Vous ne pouvez ou ne souhaitez pas vous rendre dans les magasins ? Votre auxiliaire de vie se charge de vos achats en toute autonomie, selon vos souhaits. Récupération de vos courses au drive ou achats chez des petits commerçants, DOM SERVICES s’adapte à vos besoins !
                        </p>
                    </div>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>