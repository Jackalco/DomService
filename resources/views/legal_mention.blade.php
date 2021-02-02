<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/legal_mention.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <h1>Mentions légales</h1>
            <section id="legalMention">
                <div class="itemLegalMention">
                    <h2>Présentation</h2>
                    <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet DOM Services l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
                </div>
                <div class="itemLegalMention">
                    <div><h4>Propriétaire :</h4></div>
                    <div><strong>Capital social</strong></div>
                    <div><strong>Numéro SIREN : </strong></div>
                    <div><strong>Numéro de TVA :</strong></div>
                    <div><strong>Webmasters :</strong> Vincent JACQUES</div>
                    <div><strong>Hébergeur :</strong> <a href="https://www.o2switch.fr/">02switch</a> – 224 BD GUSTAVE FLAUBERT
                    63000 CLERMONT FERRAND 04 44 44 60 40</div>
                </div>
                <div class="itemLegalMention">
                    <h3>Conditions générales d’utilisation</h3>
                    <p>Le site est accessible gratuitement à tout internaute disposant d'un accès à internet.</p>
                    <p>Le site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. Le client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux dusite.</p>
                </div>
                <div class="itemLegalMention">
                    <h3>Propriété intelectuelle</h3>
                    
                </div>
                <div class="itemLegalMention">
                    <h3>Gestion des données personelles</h3>
                    
                </div>
                <div class="itemLegalMention">
                    <h3>Limitations de responsabilité</h3>
                    <p>DOM Services ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site DOM Services, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
                    <p>DOM Services ne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site DOM Services.</p>
                </div>
                <div class="itemLegalMention">
                    <h3>Limitations contractuelles sur les données techniques</h3>
                    <p>Le site utilise la technologie HTML, CSS, JavaScript et Laravel.</p>
                    <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.</p>
                </div>
                <div class="itemLegalMention">
                    <h3>Liens hypertextes</h3>
                    <p>Le site DOM Services contient un certain nombre de liens hypertextes vers d’autres sites. Cependant, DOM Services n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                </div>
                <div class="itemLegalMention">
                    <h3>Droit applicable et attribution de juridiction</h3>
                    <p>Tout litige en relation avec l’utilisation du site DOM Services est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Saint-Brévin.</p>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>