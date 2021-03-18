<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="DOM Services vous informe des droits pour les seniors.">
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
                    <div class="item">
                    <h2>Droits des seniors</h2>
                        <p>Le vieillissement se déroule, de manière générale, dans la sérénité, mais il peut aussi se caractériser par une perte progressive de l’autonomie de la personne âgée. C’est pourquoi, certaines précautions s’imposent dans toute société soucieuse du bien-être social de ses aînés. En effet, lorsque apparaît le handicap ou une situation de dépendance, l’aîné n’est souvent plus en mesure de protéger seul ses intérêts, aussi bien à domicile qu’en maison de retraite.</p>
                        <p>Ce dossier traite des droits des personnes âgées, ainsi que sur les lois de protection de ces dernières. Vous découvrirez donc dans cette rubrique, le mandat de protection future, permettant d’organiser à l’avance sa propre protection, le concept d’obligation alimentaire, la protection juridique, la curatelle, la tutelle, la sauvegarde de justice ainsi que l’habilitation familiale.</p>
                        <p>Nous évoquerons tout particulièrement la charte des droits et libertés des personnes âgées dépendantes, mise en place par la Fondation nationale de gérontologie et le ministère de l’Emploi et de la Solidarité. Ce document à visée sociale, sorte de contrat entre les maisons de retraite et établissements de soins et entre les personnes âgées, insiste par exemple sur le droit à un accès libre aux soins, l’importance de la prévention, la nécessité de préserver la liberté, l’accessibilité à des services de santé adaptés en fin de vie, etc.</p>
                    </div>
                </div>
            </main>
        @include('layouts.footer')
    </body>
</html>