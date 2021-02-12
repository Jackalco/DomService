<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Informations sur l'aide aux seniors.">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/services.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services - Aide aux seniors</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section id="service">
                <div id="summaryService">
                    <a class="summaryItem" href="{{ route('servicing') }}">Entretien du logement</a>
                    <a class="summaryItem" href="{{ route('ironing') }}">Repassage</a>
                    <a class="summaryItem activeSummaryItem" href="{{ route('help-seniors') }}">Aide aux seniors</a>
                    <a class="summaryItem" href="{{ route('shopping') }}">Courses et accompagnement sorties</a>
                    <a class="summaryItem" href="{{ route('concierge') }}">Conciergerie</a>
                    <a class="summaryItem" href="{{ route('relationship-providers') }}">Mise en relation avec nos prestataires</a>
                </div>
                <div id="textService">
                    <h1>Aide aux seniors</h1>
                    <div class="itemTextService">
                        <h2>Toillette</h2>
                        <p>
                            DOM SERVICES accompagnent les personnes âgées dans le processus de l’habillage. Il est important de s’assurer que le bénéficiaire soit vêtu correctement en respectant d’abord ses choix pour la tenue qu’il souhaite porter tout au long de la journée. DOM SERVICES accorde une importance particulière à l’habillage pour une question d’hygiène. Et sachant qu’une personne âgée est plus frileuse, les tenues sont adaptées selon la saison. Les auxiliaires de vie préconisent des vêtements adaptés à la journée pour laisser au placard le pyjama et la chemise de nuit même si la personne n’a aucune intention de sortir de son domicile. Il est important que le bénéficiaire se sente en confiance dans ses tenues et puisse se sentir confortable et présentable lors de la venue de la famille, d’un proche ou d’un voisin.
                        </p>
                        <p>
                            Être à l’aise facilite les mouvements de la personne à son domicile surtout lorsqu’elle est amenée à avoir des activités sociales ou physiques. C'est pour ca que chez DOM SERVICES NOUS METTONS UN POINT D'HONNEUR À CE QUE LES PROFESSIONNELS RESTE LES MÊMES. L’auxiliaire de vie fait participer le bénéficiaire dans le processus de sélection des vêtements afin qu’il prenne du plaisir à s’habiller. Choisir chaque jour un style différent peut permettre à votre proche de se familiariser et de stimuler sa mémoire et ses souvenirs. Et l’auxiliaire de vie assure l’aide à l’habillage en s’adaptant à l’état de santé et à la forme de la personne (difficulté à bouger, problème de vue, arthrose) pour éviter tout risque de chute (mettre un pantalon, fermer ses boutons de chemise, etc.). Lorsque la personne est habillée, l’auxiliaire de vie s’assure de ranger les vêtements en triant le linge sale.  
                        </p>
                    </div>
                    <div class="itemTextService">
                        <h2>Aide à la prise de repas</h2>
                        <p>
                            Demandez-nous ce qui vous aide et vous fait gagner du temps :
                        </p>
                        <ul>
                            <li>Eplucher les légumes pour profiter du plaisir de cuisiner sans la corvée d’épluchage</li>
                            <li>Cuisiner un potage pour votre dîner</li>
                            <li>Mixer une purée ou une compote pour bébé avec les légumes ou fruits de votre choix</li>
                            <li>Préparer votre tarte ou votre quiche préférée</li>
                            <li>Préparer une salade composée de saison</li>
                        </ul>
                        <p>
                            Nos auxiliaires de vie peuvent aider partiellement ou de manière totale le bénéficiaire dans la prise de repas (petit-déjeuner, déjeuner et collation). Ce service proposé par DOM SERVICES s’adresse principalement aux personnes âgées et/ou handicapées qui ont des difficultés pour manger seules au quotidien. L’auxiliaire de vie assure le bon déroulement des repas en accompagnant votre proche dans ce moment si particulier et si important qui doit avant tout rester un moment de plaisir entre l’aidé et l’aidant. L’objectif est de s’adapter à l’autonomie de la personne et ne pas la rendre totalement dépendante.
                        </p>
                        <p>
                            Avec la solitude ou les difficultés physiques développées avec l’âge, certaines personnes âgées ne prennent plus autant de plaisir à savourer et à déguster un repas. DOM SERVICES offre ses services pour permettre aux seniors de profiter d’un repas agréable et convivial aux côtés de notre auxiliaire de vie. Ce dernier va adapter le repas en fonction des goûts et des envies culinaires de votre proche, proposer un repas équilibré et adapté, installer confortablement la personne afin de la mettre dans les meilleures conditions une fois à table. Le but est de lui permettre de retrouver des sensations et de réveiller ses papilles gustatives.  
                        </p>
                    </div>
                </div>
                <img src="{{ asset('images/help-seniors.jpg') }}" class="imageServices" alt="Image assistance seniors">
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>