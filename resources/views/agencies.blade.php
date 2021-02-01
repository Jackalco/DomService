<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/agencies.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Service</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section id="containerAgencies">
                <h1>Nos agences</h1>
                @foreach($agencies as $agency)
                    <div class="containerAgency">
                        <div class="itemAgency">
                            <h3>{{$agency->city}}</h3>
                        </div>
                        <div class="itemAgency">Adresse : {{$agency->address}}</div>
                        <div class="itemAgency">Téléphone : {{$agency->phone}}</div>
                        <div class="itemAgency">Adresse mail : {{$agency->email}}</div> 
                    </div>
                @endforeach
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>