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
                <div class="container">

                    <!-- Success message -->
                    @if(Session::has('success'))
                        <div>
                            {{Session::get('success')}}
                        </div>
                    @endif

                    <form action="" method="post" action="{{ route('contact.store') }}">

                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf

                        <div class="itemForm">
                            <div class="labelForm">Nom</div>
                            <input type="text" class="inputForm {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                            <!-- Error -->
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Email</div>
                            <input type="email" class="inputForm {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                            @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Téléphone</div>
                            <input type="text" class="inputForm {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

                            @if ($errors->has('phone'))
                            <div class="error">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Agence</div>
                            <select class="inputForm {{ $errors->has('agency') ? 'error' : '' }}" name="agency" id="agency">
                                <option value="">Choississez une agence</option>
                                <option value="Agence 1">Agence 1</option>
                                <option value="Agence 2">Agence 2</option>
                            </select>

                            @if ($errors->has('subject'))
                            <div class="error">
                                {{ $errors->first('subject') }}
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Message</div>
                            <textarea class="inputForm {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                rows="4"></textarea>

                            @if ($errors->has('message'))
                            <div class="error">
                                {{ $errors->first('message') }}
                            </div>
                            @endif
                        </div>

                        <input type="submit" name="send" value="Submit" class="inputSubmit">
                    </form>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>