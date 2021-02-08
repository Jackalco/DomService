<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/company.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>d

        <title>DOM Service</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section class="aboutCompany">
                <h1 class="titleAboutCompany">L'entreprise</h1>
                <div class="contentAboutCompany">
                    <div class="itemAboutCompany">
                        <div class="textAboutCompany">
                            <h2>Introduction</h2>
                            <p>
                                DOM SERVICES est un service à la personne crée par Sylvie MENDY en 2015.
                            </p>
                            <p>
                                L'objectif principal de DOM SERVICES est le bien-être de ses bénéficiaires. Nous l'assurons en développant et améliorant ses services. Étant sur une démarche RSE, DOM SERVICES interviendra seulement sur Saint-Brévin.
                            </p>
                            <p>
                                DOM SERVICES  est l'employeur du personnel lis à votre disposition, nous intervenons en tant que prestataire.
                            </p>
                        </div>                             
                        <img class="imageAboutCompany" src="{{ asset('images/img6.jpg') }}" alt="img6">
                    </div>
                    <div class="itemAboutCompany">
                        <div class="textAboutCompany">
                            <h2>Qui sommes nous</h2>
                        </div>                             
                        <iframe class="videoCompany" width="560" height="315" src="https://www.youtube.com/embed/29H7IwJo9O8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>                     
                    </div>
                    <div class="itemAboutCompany">
                        <img class="imageAboutCompany" src="{{ asset('images/img5.jpg') }}" alt="img5">
                        <div class="textAboutCompany">
                            <h2>Nos valeurs</h2>
                            <ul>
                                <li>L'humanité</li>
                                <li>La solidarité</li>
                                <li>L'écoute</li>
                                <li>Le respect</li>
                                <li>L'échange</li>                                
                                <li>La diversité</li>
                                <li>Le respect du lieu de vie</li>
                            </ul>
                        </div>
                    </div>
                    <div class="itemAboutCompany">
                        <div class="textAboutCompany">
                            <h2>Activité</h2>
                            <p>
                                Le service fonctionne du lundi au vendredi de 9h30 à 12h00 et de 13h00 à 18h.
                                <br>
                                Pour les demandes, les coordonnatrices de DOM SERVICES reçoivent sur rendez-vous dans nos locaux.
                            </p>
                            <p>
                                En dehors des heures d'ouvertures, l'accueil téléphonique de DOM SERVICES est assuré par un répondeur mis à disposition des usagers et du personnel au 09 72 58 61 65, ainsi qu'un interlocuteur pour assurer les urgences. Les messages sont traités pendant les heures d'ouvertures du service.
                            </p>
                            <p>
                                En cas d'interrogations, de difficultés particulières ou de dysfonctionnement constatés, vous pouvez vous addresser à DOM SERVICES par téléphone, courrier ou e-mail.
                            </p>
                            <p>
                                DOM SERVICES offre un service qui contribue au maintien à domicile des personnes âgées, handicapées ou malades. En mettant à disposition du personnel, il apporte une aide et un soutien à la personne dans son propre cadre de vie.
                            </p>
                        </div>
                        <img class="imageAboutCompany" src="{{ asset('images/img7.jpg') }}" alt="img7">
                    </div>
                    <div class="itemAboutCompany">
                        <img class="imageAboutCompany" src="{{ asset('images/img8.jpg') }}" alt="img8">
                        <div class="textAboutCompany">
                            <h2>Nos engagements</h2>
                            <ul>
                                <li>Un service de qualité</li>
                                <li>Des tarifs adaptés</li>
                                <li>Une force de réactivité</li>
                                <li>Une écoute, une solution</li>
                                <li>Des partenaires de confiance</li>
                                <li>Un roulement de personnel limité</li>                              
                            </ul>
                        </div>
                    </div>
                </div>
                
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>