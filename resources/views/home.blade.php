<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="DOM Services est un service d'aide à la personne depuis 2015.">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services - Accueil</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section class="companyContainer">
                <img src="{{ asset('images/img3.jpg') }}" class="companyImage" alt="img3">
                <div class="companyContent">
                    <h2>L'entreprise</h2>
                    <p>
                        DOM SERVICES met en évidence le respect, l’écoute et l’accompagnement de ses bénéficiaires.
                    </p>
                    <p>
                        Grâce à nos ABE et ABES (salariés), DOM SERVICES vous propose des prestations de qualités. Nous limitons le turn over pour répondre au mieux aux besoins et au respect des bénéficiaires. 
                    </p>
                    <p>
                        L’objectif principal de DOM SERVICES est le bien-être de ses bénéficiaires mais aussi celui de ses ABE et ABES.
                    </p>
                </div>
            </section>
            <section class="franchiseContainer">
                <img src="{{ asset('images/img9.jpg') }}" class="franchiseImage" alt="img9">
                <div class="franchiseContent">
                    <h2>Rejoignez le réseau DOM Services !</h2>
                    <p>Créer votre entreprise en franchise, vous y songez? <br>
                    Vous êtes sensible au secteur de l'aide à domicile ? <br>
                    Pensez à rejoindre le réseau DOM SERVICES !</p>
                    <a class="buttonAbout" href="{{ route('contact') }}">Devenir franchisé</a>
                </div>
            </section>
            <section class="agenciesContainer">
                <img class="agenciesImage" src="{{ asset('images/world.jpg') }}" alt="Image de la Terre">
                <div class="agenciesContent">
                    <h2>Votre agence DOM Services près de chez vous</h2>
                    <a class="buttonAbout" href="{{ route('agencies') }}">Trouvez l'agence la plus proche</a>
                </div>
            </section>
            <section class="recruitmentContainer">
                <div class="layerRecruitment">
                    <div class="recruitmentContent">
                        Vous avez remarqué l'une de nos annonces ou souhaitez soumettre une candidature spontanée ?<br>
                        <a class="buttonAbout" href="{{ route('recruitment') }}">Nous rejoindre</a>
                    </div>
                </div>
                  
            </section>
            <aside>
                <div class="downloadItem">
                    <a href="{{ asset('files/LIVRET_domservices_france.pdf') }}" download="LIVRET_domservices_france.pdf">Télécharger notre livret d'accueil</a>
                    <a href="{{ asset('files/Livret_accueil.mp3') }}" download="Livret_accueil.mp3">Version audio</a>
                </div>
                <div class="itemAside">
                    <div>Avis clients</div>
                    <div>4,8/5</div>
                    <div>
                        <i class="fas fa-star iconAside"></i>
                        <i class="fas fa-star iconAside"></i>
                        <i class="fas fa-star iconAside"></i>
                        <i class="fas fa-star iconAside"></i>
                        <i class="fas fa-star-half iconAside"></i>
                    </div>
                </div>
                <div class="itemAside">
                    <div>09.72.58.61.65</div>
                    <div>Lundi au Vendredi :</div>
                    <div>9h30 - 12h</div>
                    <div>13h - 15h30</div>
                </div>
            </aside>
        </main>
        @include('layouts.footer')
    </body>
</html>