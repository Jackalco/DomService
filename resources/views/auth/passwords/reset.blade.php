<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Page de réinitialisation de mot de passe">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services - Réinitialisation mot de passe</title>

    </head>
    <body>
    @include('layouts.nav')
        <main>
        <div class="container">
                <h1>Réinitialisation du mot de passe</h1>
                <div class="item">
                    @if (session('status'))
                        <div class="error" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="item">
                            <label for="email" class="loginLabel">Adresse mail</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="alert" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="item">
                            <label for="email" class="loginLabel">Nouveau mot de passe</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="item">
                            <label for="email" class="loginLabel">Confirmer mot de passe</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
