<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/recruitment.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>

        <title>DOM Service</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
        <section id="recruitment">
                <div class="container">
                    <h1>Recrutement</h1>
                    <h3>Rejoignez-nous !</h3>
                    <p>Vous avez remarquez l'une de nos annonces ou souhaitez soumettre une candidature spontanée ? Alors n'hésitez pas à remplir notre formulaire de recrutement.</p>
                    <img src="{{ asset('images/recruitment.jpg') }}" alt="Image contact">
                </div>
                <div class="container">            

                    <form action="" method="post" action="{{ route('recruitment.store') }}">

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
                                <option value="Agence 1">Agence 1</option>
                                <option value="Agence 2">Agence 2</option>
                            </select>

                            @if ($errors->has('agency'))
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">CV</div>
                            <div>Fichier acceptés : .docx, .doc et .pdf</div>
                            <input type="file" accept=".docx, .doc, .pdf" class="fileInput {{ $errors->has('cv') ? 'error' : '' }}" name="cv" id="cv">

                            @if ($errors->has('cv'))
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            @endif
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Lettre de motivation</div>
                            <div>Fichier acceptés : .docx, .doc et .pdf</div>
                            <input type="file" accept=".docx, .doc, .pdf" class="fileInput {{ $errors->has('letter') ? 'error' : '' }}" name="letter" id="letter">

                            @if ($errors->has('letter'))
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