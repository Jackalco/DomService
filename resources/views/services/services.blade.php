<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/services.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>

        <title>DOM Services</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section id="aboutServices">
                <h2 id="titleServices">Nos services</h2>
                <div id="infoServices">
                    <img src="{{ asset('images/img1.jpg') }}" alt="img1">
                    <p id="textInfoServices">
                        DOM Services propose plusieurs services pour les personnes ayant besoin d'assistance à domicile afin de les aider dans leurs quotidien.
                    </p>  
                </div>
                <a class="linkServices" href="">
                    <i class="fas fa-broom iconServices"></i>
                    <div class="titleIcon">Entretien du logement</div>
                </a>
                <a class="linkServices" href="">
                    <i class="fas fa-tshirt iconServices"></i>
                    <div class="titleIcon">Repassage</div>
                </a>
                <a class="linkServices" href="">
                    <i class="fas fa-blind iconServices"></i>
                    <div class="titleIcon">Aide aux seniors</div>
                </a>
                <a class="linkServices" href="">
                    <i class="fas fa-shopping-bag iconServices"></i>
                    <div class="titleIcon">Courses et accompagnement sorties</div>
                </a>
                <a class="linkServices" href="">
                    <i class="fas fa-concierge-bell iconServices"></i>
                    <div class="titleIcon">Conciergerie</div>
                </a>
                <a class="linkServices" href="">
                    <i class="fas fa-hands-helping iconServices"></i>
                    <div class="titleIcon">Mise en relation avec nos prestataires</div>
                </a>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>