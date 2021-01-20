<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>

        <title>DOM Service</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <div>
                Accueil
            </div>
        </main>
        @include('layouts.footer')
    </body>
</html>