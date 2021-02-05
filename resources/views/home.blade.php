<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section class="homeLeft">
                <img src="{{ asset('images/img4.jpg') }}" class="imageHome" alt="img4">
                <div class="textHome">
                    <h2>L'entreprise</h2>
                    <p>DOM Services met en évidence le respect, l'écoute et l'accompagnement de ses bénéficiaires. Grâce à nos ABE et ABES (salariés), DOM Services vous propose des prestations de qualitées. Nous limitons le turn over pour répondre au mieux aux besoins et aux respect des bénéficiares.</p>
                    <p>L'objectif principal de DOM Services est le bien-être de ses bénéficiaires mais aussi celui de nos ABE et ABES.</p>
                    <br>
                    <a class="buttonAbout" href="{{ route('company') }}">En savoir plus</a>
                </div>
            </section>
            <section class="homeRight">
                <div class="textHome">
                    <h2>Nos services</h2>
                    <p>Nous mettons à votre service notre analyse et notre évaluation des besoins afin de créer des prestations au plus juste de vos attentes.</p>
                    <br>
                    <a class="buttonAbout" href="{{ route('services') }}">En savoir plus</a>
                </div>
                <img src="{{ asset('images/img1.jpg') }}" class="imageHome" alt="img1">   
            </section>
            <section class="homeLeft">
                <img src="{{ asset('images/img3.jpg') }}" class="imageHome" alt="img3">
                <div class="textHome">
                    <h2>Rejoignez nous !</h2>
                    <p>
                        Vous avez remarquez l'une de nos annonces ou souhaitez soumettre une candidature spontanée ?
                    </p>
                    <p>
                        Alors n'hésitez pas à remplir notre formulaire de recrutement.
                    </p>
                    <br>
                    <a class="buttonAbout" href="{{ route('recruitment') }}">En savoir plus</a>
                </div>
            </section>
            <section id="linkFindAgencies">
                <div id="containLinkFindAgencies">
                    <div id="textLinkFindAgencies">
                        <h4>Votre agence près de chez vous</h4>
                        <p>
                            Trouvez une de nos agences DOM Services étant le plus proche de chez vous.
                        </p>
                        <br>
                        <a class="buttonAbout" href="{{ route('agencies') }}">Trouvez une agence</a>
                    </div>
                    <div id="iconLinkFindAgencies">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>