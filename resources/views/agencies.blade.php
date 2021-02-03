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
            <h1>Nos agences</h1>
            <p>Trouvez l'agence la plus proche de chez vous.</p>
            <section id="containerAgencies">
                @foreach($agencies as $agency)
                    <div class="containerAgency">
                        <div class="columnAgency">
                            <div class="itemAgency title">{{$agency->city}}</div>
                            <div class="itemAgency"><strong>Adresse :</strong> {{$agency->address}}</div>
                        </div>
                        <div class="columnAgency">
                            <div class="itemAgency"><strong>Téléphone :</strong> {{$agency->phone}}</div>
                            <div class="itemAgency"><strong>Adresse mail :</strong> {{$agency->email}}</div> 
                        </div>
                    </div>
                @endforeach
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>