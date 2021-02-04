<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/formAdmin.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <div class="container">
                <form method="post" action="{{ route('agency.store') }}">
                    <div class="itemForm">
                        <div class="labelForm">Ville</div>
                        <input class="inputForm {{ $errors->has('city') ? 'error' : '' }}" type="text">

                        @if ($errors->has('city'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>
                    <div class="itemForm">
                        <div class="labelForm">Adresse</div>
                        <input class="inputForm {{ $errors->has('address') ? 'error' : '' }}" type="text">

                        @if ($errors->has('address'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>
                    <div class="itemForm">
                        <div class="labelForm">Téléphone</div>
                        <input class="inputForm {{ $errors->has('phone') ? 'error' : '' }}" type="text">

                        @if ($errors->has('phone'))
                        <div class="errorInput">
                            Ce champ est obligatoire.
                        </div>
                        @endif

                    </div>
                    <div class="itemForm">
                        <div class="labelForm">Adresse mail</div>
                        <input class="inputForm {{ $errors->has('email') ? 'error' : '' }}" type="text">

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