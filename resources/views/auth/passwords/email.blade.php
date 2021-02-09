<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services</title>

    </head>
    <body>
    @include('layouts.nav')
        <main>
        @guest                       
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @endguest
            <div class="container">
                <h1>Réinitialisation du mot de passe</h1>
                <div class="item">
                    @if (session('status'))
                        <div class="error" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="item">
                            <label for="email" class="loginLabel">Adresse mail</label>
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="item">
                            <button type="submit" class="submitButton">
                                Réinitialiser le mot de passe
                            </button>
                        </div>
                    </form>
            </div>
        </main>
    @include('layouts.footer')
    </body> 
</html>
