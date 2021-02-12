<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Création agence DOM Services.">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/formAdmin.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services - Création agence</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <a class="returnButton" href="{{ route('admin') }}">Retour</a>
            <h1>Ajouter une agence</h1>
            <div class="container">
                <form method="post" action="{{ route('agency.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="itemForm">
                        <div class="labelForm">Ville</div>
                        <input class="inputForm {{ $errors->has('city') ? 'error' : '' }}" type="text" name="city" id="city">

                        @if ($errors->has('city'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>

                    <div class="itemForm">
                        <div class="labelForm">Adresse</div>
                        <input class="inputForm {{ $errors->has('address') ? 'error' : '' }}" type="text" name="address" id="address">

                        @if ($errors->has('address'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>

                    <div class="itemForm">
                        <div class="labelForm">Lattitude</div>
                        <input class="inputForm {{ $errors->has('address') ? 'error' : '' }}" type="text" name="lat" id="lat">

                        @if ($errors->has('lat'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>

                    <div class="itemForm">
                        <div class="labelForm">Longitude</div>
                        <input class="inputForm {{ $errors->has('address') ? 'error' : '' }}" type="text" name="lng" id="lng">

                        @if ($errors->has('lng'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>

                    <div class="itemForm">
                        <div class="labelForm">Téléphone</div>
                        <input class="inputForm {{ $errors->has('phone') ? 'error' : '' }}" type="text" name="phone" id="phone">

                        @if ($errors->has('phone'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>

                    <div class="itemForm">
                        <div class="labelForm">Adresse mail</div>
                        <input class="inputForm {{ $errors->has('email') ? 'error' : '' }}" type="text" name="email" id="email">

                        @if ($errors->has('email'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>

                    <input type="submit" name="create" value="Ajouter" class="inputSubmit">

                    @if(Session::has('success'))
                        <div class="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                </form>
            </div>
        </main>
        @include('layouts.footer')
    </body>
</html>