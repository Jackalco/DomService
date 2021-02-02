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
                    <div class="infoLegalMention"><strong>Propriétaire :</strong> DOM Services</div>
                    <div class="infoLegalMention"><strong>Activité :</strong> Service à domicile</div>
                    <div class="infoLegalMention"><strong>Capital social :</strong> 1000 €</div>
                    <div class="infoLegalMention"><strong>Numéro SIRET : </strong> 81117213900032</div>
                    <div class="infoLegalMention"><strong>Numéro de TVA :</strong> FR23811172139</div>
                    <div class="infoLegalMention"><strong>Email :</strong> </div>
                    <div class="infoLegalMention"><strong>Téléphone :</strong> 09 72 58 61 65</div>
                    <div class="infoLegalMention"><strong>Webmasters :</strong> Vincent JACQUES</div>
                    <div class="infoLegalMention"><strong>Hébergeur :</strong> <a href="https://www.o2switch.fr/" target="_blank">02switch</a> – 224 BD GUSTAVE FLAUBERT
                    63000 CLERMONT FERRAND 04 44 44 60 40</div>
                </div>
                <div class="itemLegalMention">
                    <h3>Conditions générales d’utilisation</h3>
                    <p>Le site est accessible gratuitement à tout internaute disposant d'un accès à internet.</p>
                    <p>Le site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. Le client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux dusite.</p>
                    <p>L’utilisation du site DOM Services implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site DOM Services sont donc invités à les consulter de manière régulière.</p>
                </div>
                <div class="itemLegalMention">
                    <h3>Gestion des données personelles</h3>
                    <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
                    <p>A l’occasion de l’utilisation du site DOM Services, peuvent être recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur a accédé au site DOM Services, le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur.</p>
                    <p>En tout état de cause DOM Services ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains services proposés par le site DOM Services (demande de contact, de devis…). L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site Senior Compagnie l’obligation ou non de fournir ces informations.</p>
                    <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
                    <p>Aucune information personnelle de l’utilisateur du site DOM Services n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers.</p>
                    <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
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