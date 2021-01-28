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
                    <a class="summaryItem activeSummaryItem" href="{{ route('servicing') }}">Entretien du logement</a>
                    <a class="summaryItem" href="{{ route('ironing') }}">Repassage</a>
                    <a class="summaryItem" href="{{ route('help-seniors') }}">Aide aux seniors</a>
                    <a class="summaryItem" href="{{ route('shopping') }}">Courses et accompagnement sorties</a>
                    <a class="summaryItem" href="{{ route('concierge') }}">Conciergerie</a>
                    <a class="summaryItem" href="{{ route('relationship-providers') }}">Mise en relation avec nos prestataires</a>
                </div>
                <div id="textService">
                    <div class="itemTextService">
                        <h1>Entretien du logement</h1>
                        <p>
                            Vous n'avez plus le temps ni l'envie de faire votre ménage ? DOM SERVICES VOUS FACILITE VOTRE quotidien. Imaginez votre maison propre et rangée selon vos exigences ! Partagez-nous vos besoins et toutes vos envies concernant l’entretien de votre intérieur. Ménage, repassage, rangement, préparation des repas, ne vous occupez plus de rien ! 
                        </p>
                        <p>
                            Allégez votre quotidien et prenez du temps pour vous et votre entourage. Nous formons nos employés pour répondre à chacun de vos besoins. Nous prenons soin de votre intérieur. Nous gérons l’intégralité du linge et repassons tous les textiles. Au-delà d’un savoir-faire, il nous tient à cœur de vous satisfaire. Nous respectons vos habitudes de rangement et votre intimité. Nous adaptons notre planning pour des prestations de ménage aux jours et heures de votre choix. Nos professionnelles sont formées en continu pour vous satisfaire.   
                        </p>
                    </div>
                </div>
                <img src="{{ asset('images/servicing.jpg') }}" class="imageServices" alt="Image entretien">
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>