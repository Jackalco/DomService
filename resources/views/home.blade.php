<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>

        <title>DOM Services</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section class="homeLeft">
                <img src="{{ asset('images/img4.jpg') }}" class="imageHome" alt="img4">
                <div class="textHome">
                    <h2>L'entreprise</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                    </p>
                    <br>
                    <a class="buttonAbout" href="">En savoir plus</a>
                </div>
            </section>
            <section class="homeRight">
                <div class="textHome">
                    <h2>Nos services</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                    </p>
                    <br>
                    <a class="buttonAbout" href="">En savoir plus</a>
                </div>
                <img src="{{ asset('images/img1.jpg') }}" class="imageHome" alt="img1">   
            </section>
            <section class="homeLeft">
                <img src="{{ asset('images/img3.jpg') }}" class="imageHome" alt="img3">
                <div class="textHome">
                    <h2>Rejoignez nous !</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                    </p>
                    <br>
                    <a class="buttonAbout" href="">En savoir plus</a>
                </div>
            </section>
            <section id="linkFindAgencies">
                <div id="containLinkFindAgencies">
                    <div id="textLinkFindAgencies">
                        <h4>Votre agence près de chez vous</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed 
                        </p>
                        <br>
                        <a class="buttonAbout" href="{{ route('agencies') }}">Trouvez une agence</a>
                    </div>
                    <div id="iconLinkFindAgencies">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>