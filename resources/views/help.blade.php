<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="DOM Services vous informe des aides financières que vous pouvez recevoir.">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/help.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services - Aides financières</title>

    </head>
    <body>
        @include('layouts.nav')
            <main>
                <div class="container">
                    <header>Pour optimiser la prise en charge à domicile comme en établissement, il existe différentes aides financières pour les personnes âgées, adaptées à chaque situation. En effet, avec l’âge, les dépenses liées à la dépendance et au logement augmentent souvent, alors que la pension retraite est parfois insuffisante.</header>
                    <section class="item">
                        <h2>Qu’est-ce que les aides financières pour les personnes âgées ?</h2>
                        <p>Les aides financières aux personnes âgées sont des allocations et prestations versées par les autorités publiques pour assurer une meilleure prise en charge du vieillissement.</p>
                        <p>À chaque situation (dépendance, logement inadapté, revenus insuffisants) <a href="{{ route('seniors-rights') }}">correspond une aide financière pour les retraités</a>.</p>
                    </section>
                    <section class="item">
                        <h2>Les aides financières aux personnes âgées</h2>
                    </section>
                    <section class="item">
                        <table>
                            <tr>
                                <td></td>
                                <td><strong>Pour qui ?</strong></td>
                                <td><strong>Pour quoi ?</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Allocation de solidarité aux personnes âgées (<a target="_blank" href="https://www.service-public.fr/particuliers/vosdroits/F16871">ASPA</a>)</strong></td>
                                <td>Personne âgée ayant une retraite modeste</td>
                                <td>Assurer un revenu minimal</td>
                            </tr>
                            <tr>
                                <td><strong>Prestation de compensation du handicap (<a target="_blank" href="https://www.service-public.fr/particuliers/vosdroits/F14202">PCH</a>)</strong></td>
                                <td>Personne âgée handicapée de moins de 75 ans</td>
                                <td>Financer des aides humaines et techniques, l’adaptation du logement et celle du véhicule</td>
                            </tr>
                            <tr>
                                <td><strong>Allocation personnalisée d’autonomie (<a target="_blank" href="https://www.service-public.fr/particuliers/vosdroits/F10009">APA</a>)</strong></td>
                                <td>Personne âgée dépendante de 60 ans et plus (GIR 1-4)</td>
                                <td>Contribuer au financement de la prise en charge de la dépendance</td>
                            </tr>
                            <tr>
                                <td><strong>Aide-ménagère à domicile (<a target="_blank" href="https://www.pour-les-personnes-agees.gouv.fr/vivre-a-domicile/aides-financieres/laide-menagere-a-domicile">aide sociale</a>)</strong></td>
                                <td>Personne âgée ayant besoin d’aide au quotidien de 60 ans et plus (GIR 5-6)</td>
                                <td>Financer des heures d’aide à domicile</td>
                            </tr>
                            <tr>
                                <td><strong><a target="_blank" href="https://www.pour-les-personnes-agees.gouv.fr/vivre-a-domicile/aides-financieres/les-aides-au-logement-domicile">Aides au logement</a></strong></td>
                                <td>Personne âgée qui a des difficultés à payer les dépenses liées au logement</td>
                                <td>Alléger les frais de loyer, prêt ou tarif hébergement en maison de retraite</td>
                            </tr>
                            <tr>
                                <td><strong>Aide sociale à l’hébergement (<a target="_blank" href="https://www.service-public.fr/particuliers/vosdroits/F2444">ASH</a>)</strong></td>
                                <td>Personne âgée de 60 ans et plus hébergée dans une maison de retraite</td>
                                <td>Participer au financement du tarif hébergement en Ehpad ou résidence-autonomie</td>
                            </tr>
                            <tr>
                                <td><strong><a target="_blank" href="https://www.pour-les-personnes-agees.gouv.fr/preserver-son-autonomie-s-informer-et-anticiper/amenager-son-logement-et-sequiper/amenager-son-logement">Aide à l’aménagement du logement</a></strong></td>
                                <td>Personne âgée qui a besoin d’adapter son domicile au vieillissement</td>
                                <td>Faire des travaux pour sécuriser la maison</td>
                            </tr>
                        </table>
                    </section>
                    <section class="item">
                        <h2>Qu’est-ce que le minimum vieillesse ?</h2>
                        <p>Le minimum vieillesse, aujourd’hui appelée Allocation de solidarité aux personnes âgées (ASPA) est une aide financière pour le senior dont la retraite est insuffisante.</p>
                        <p>Le minimum vieillesse ou ASPA est versé aux personnes âgées de 65 ans et plus, résidant de manière stable en France.</p>
                        <p>Accordée sous conditions de ressources, l’allocation vise à assurer un revenu minimal pour permettre à la personne âgée de vivre décemment.</p>
                        <p>Cette aide financière tente de compléter les retraites modestes et, en 2021, elle peut atteindre au maximum :
                            <ul>
                                <li>903,20 € par mois pour une personne seule</li>
                                <li>1 402,22 € par mois pour un couple</li>
                            </ul>
                        </p>
                        <p><strong>L’ASPA est versée par la Carsat</strong> (Assurance retraite – régime de retraite général) ou <strong>la Mutualité sociale agricole</strong> (MSA – régime des agriculteurs), sous la forme d’un complément de revenu. C’est à la caisse de retraite à laquelle la personne âgée est affiliée qu’il faudra s’adresser pour faire la demande de l’ASPA.</p>
                    </section>
                    <section class="item">
                        <h2>Quelle aide pour les personnes âgées dépendantes ?</h2>
                        <p>Les personnes âgées dépendantes peuvent bénéficier de plusieurs allocations. Elles permettent de financer une aide à domicile pour assister l’aîné dans les gestes du quotidien ou de s’acquitter du tarif hébergement en résidence médicalisée.</p>
                    </section>
                    <section class="item">
                        <h2>Les aides financières aux personnes âgées en perte d’autonomie sont :</h2>
                        <p>Prestation de compensation du handicap (PCH).</p>
                        <p>Cette aide s’adresse à la personne âgée handicapée de moins de 75 ans et dont le handicap a été diagnostiqué avant l’âge de 60 ans; elle permet de financer des aides humaines et techniques, ainsi que l’adaptation du logement et du véhicule.</p>
                    </section>
                    <section class="item">
                        <h2>Allocation de solidarité aux personnes âgées (APA)</h2>
                        <p>Cette aide s’adresse à la personne âgée dépendante de 60 ans et plus (GIR 1 à 4, fixé à l’aide de la grille AGGIR).</p>
                        <p>À domicile, elle participe au financement d’un plan d’aide personnalisé en fonction des besoins de la personne âgée (aide à domicile, portage des repas, aides techniques, accueil de jour, séjour temporaire); en établissement, elle finance une partie du tarif dépendance de l’Ehpad ou de l’USLD, pour bénéficier de l’APA, il faut s’adresser au Centre communal d’actions sociale (CCAS) qui s’occupe des dossiers d’APA et autres aides financières aux personnes âgées, ou directement au Conseil départemental, qui finance l’APA, le montant de l’APA dépend des besoins du bénéficiaire et de ses revenus.</p>
                    </section>
                    <section class="item">
                        <h2>Aide-ménagère à domicile</h2>
                        <p>Cette aide à domicile s’adresse aux personnes âgées en GIR 5 et 6, qui ont des difficultés pour accomplir les principales tâches du quotidien, elle est versée par le département ou par la caisse de retraite, en fonction des ressources du demandeur, pour avoir droit à une aide-ménagère départementale, vous devez être âgé d’au moins 65 ans (ou 60 ans en cas d’inaptitude au travail), elle permet de financer des heures d’aide à domicile : ménage, entretien du linge, aide à la toilette et préparation des repas.</p>
                    </section>
                    <section class="item">
                        <h2>Quelles sont les aides sociales pour personnes âgées ?</h2>
                        <p>La dépendance n’est pas la seule dépense qui pèse sur le budget des aînés : le logement ou l’hébergement en établissement peut également avoir un coût difficile à assumer pour les personnes aux revenus les plus modestes.</p>
                        <p>Il existe deux types d’aide aux personnes âgées allégeant la facture logement et améliorant ainsi les conditions de vie des aînés :</p>
                        <ul>
                            <li>
                                <h3>Aides au logement</h3>
                                <p>Ces aides s’adressent à la personne âgée qui a des difficultés à payer son loyer, les mensualités de remboursement de son prêt ou le tarif hébergement d’une maison de retraite, il existe deux allocations différentes non cumulables : l’aide personnalisée au logement (APL) et l’allocation de logement sociale (ALS).</p>
                            </li>
                            <li>
                                <h3>Aide sociale à l’hébergement (ASH)</h3>
                                <p>Cette aide s’adresse à la personne âgée de 60 ans et plus hébergée dans une maison de retraite habilitée à l’aide sociale, il s’agit d’une aide subsidiaire accordée aux personnes âgées qui ne peuvent payer le tarif hébergement d’un Ehpad ou le loyer d’une résidence-autonomie (ex-foyer-logement), même en faisant jouer l’obligation alimentaire.</p>
                                <p>Cette aide s’adresse à la personne âgée de 60 ans et plus hébergée dans une maison de retraite habilitée à l’aide sociale, il s’agit d’une aide subsidiaire accordée aux personnes âgées qui ne peuvent payer le tarif hébergement d’un Ehpad ou le loyer d’une résidence-autonomie (ex-foyer-logement), même en faisant jouer l’obligation alimentaire.</p>
                            </li>
                        </ul>
                    </section>
                </div>  
            </main>
        @include('layouts.footer')
    </body>
</html>