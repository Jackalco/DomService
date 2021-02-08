<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
           <h1>Gestion administrateur</h1>
           <a class="addButton" href="{{ route('agency.create') }}">Ajouter une agence</a>
           <section class="container">
                @foreach($agencies as $agency)
                    <div class="containerAdmin">
                        <div class="columnAdmin">
                            <div class="itemAdmin title">{{$agency->city}}</div>
                            <div class="itemAdmin"><strong>Adresse :</strong> {{$agency->address}}</div>
                        </div>
                        <div class="columnAdmin">
                            <div class="itemAdmin"><strong>Téléphone :</strong> {{$agency->phone}}</div>
                            <div class="itemAdmin"><strong>Adresse mail :</strong> {{$agency->email}}</div> 
                        </div>
                        <div class="columnAdmin">
                            <a class="buttonAdmin" href="{{ route('agency.edit', $agency->id) }}">Modifier</a>
                            <form action="{{ route('agency.delete', $agency->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="buttonAdmin">Supprimer</button> 
                            </form>
                            
                        </div>
                    </div>
                @endforeach
            </section>
                <a href="{{ route('logout') }}">Déconnexion</a>
           
        </main>
        @include('layouts.footer')
    </body>
</html>