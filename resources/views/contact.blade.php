<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Contactez DOM Services pour un devis gratuit ou pour une demande de franchise.">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Services - Contact</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section id="contact">
                <div class="container">
                    <h1>Contact</h1>
                    <h3>Contactez nous pour un devis gratuit ou pour une demande de franchise.</h3>
                    <p>Nos équipes vous contacteront dans les plus brefs délais afin de vous proposer une aide personnalisée selon votre profil.</p>
                    <img src="{{ asset('images/contact.jpg') }}" alt="Image contact">
                </div>
                <div class="container">            

                    <form method="post" action="{{ route('contact.store') }}">

                        @csrf

                        <div class="itemForm">
                            <div class="labelForm">Nom</div>
                            <input type="text" class="inputForm {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                            @if ($errors->has('name'))
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Sujet</div>
                            <select class="inputForm {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject">
                                <option value="">Choississez un sujet</option>                         
                                    <option value="Demande de devis">Demande de devis</option>
                                    <option value="Demande de franchise">Demande de franchise</option>
                            </select>

                            @if ($errors->has('subject'))
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Email</div>
                            <input type="email" class="inputForm {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                            @if ($errors->has('email'))
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Téléphone</div>
                            <input type="text" class="inputForm {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

                            @if ($errors->has('phone'))
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Agence</div>
                            <select class="inputForm {{ $errors->has('agency') ? 'error' : '' }}" name="agency" id="agency">
                                <option value="">Choississez une agence</option>
                                @foreach($agencies as $agency)
                                    <option value="{{$agency->email}}">{{$agency->city}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('agency'))
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Message</div>
                            <textarea class="textAreaForm {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"></textarea>

                            @if ($errors->has('message'))
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            @endif
                        </div>

                        <input type="submit" name="send" value="Envoyer" class="inputSubmit">

                        @if(Session::has('success'))
                            <div class="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        
                    </form>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>