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
                    <a class="summaryItem" href="{{ route('servicing') }}">Entretien du logement</a>
                    <a class="summaryItem" href="{{ route('ironing') }}">Repassage</a>
                    <a class="summaryItem activeSummaryItem" href="{{ route('help-seniors') }}">Aide aux seniors</a>
                    <a class="summaryItem" href="{{ route('shopping') }}">Courses et accompagnement sorties</a>
                    <a class="summaryItem" href="{{ route('concierge') }}">Conciergerie</a>
                    <a class="summaryItem" href="{{ route('relationship-providers') }}">Mise en relation avec nos prestataires</a>
                </div>
                <div id="textService">
                    <h1>Aide aux seniors</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                    </p>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>