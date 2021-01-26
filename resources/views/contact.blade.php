<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Service</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section id="contact">
                <h1>Contact</h1>
                <form class="formContact" action="{{ route('contact') }}" method="post">
                    <div>Prénom</div>
                    <input type="firstName" name="firstName" placeholder="Prénom">
                    <div>Nom</div>
                    <input type="lastName" name="lastName" placeholder="Nom">
                    <div>Adresse mail</div>
                    <input type="email" name="email" placeholder="Adresse mail">
                    <div>Téléphone</div>
                    <input type="phone" name="phone" placeholder="Téléphone">
                    <div>Votre message</div>
                    <textarea type="message" name="message" placeholder="Votre message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>