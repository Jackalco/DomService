<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/carousel.js') }}"></script>

        <title>DOM Service</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section class="demoLeft">
                <img src="{{ asset('images/img1.jpg') }}" class="imageDemo" alt="img1">
                <div class="textDemo">
                    <h2>Titre</h2>
                    <hr>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                    </p>
                    <br>
                    <a class="buttonAbout" href="">En savoir plus</a>
                </div>
            <!--<div class="slideShowContainer">
                    <div class="slides fade">
                        <img src="{{ asset('images/img1.jpg') }}" class="imgSlide">
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                        </div>
                    </div>
                        
                    </div>
                    <div class="slides fade">
                        <img src="{{ asset('images/img2.jpg') }}" class="imgSlide">
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                        </div>
                    </div>
                    <div class="slides fade">
                        <img src="{{ asset('images/img3.jpg') }}" class="imgSlide">
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                        </div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
            </section>
            <section class="demoRight">
                <div class="textDemo">
                    <h2>Titre</h2>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                    </p>
                    <br>
                    <a class="buttonAbout" href="">En savoir plus</a>
                </div>
                <img src="{{ asset('images/img2.jpg') }}" class="imageDemo" alt="img2">   
            </section>
            <section class="demoLeft">
                <img src="{{ asset('images/img3.jpg') }}" class="imageDemo" alt="img3">
                <div class="textDemo">
                    <h2>Titre</h2>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                    </p>
                    <br>
                    <a class="buttonAbout" href="">En savoir plus</a>
                </div>
            </section>
            <section class="linkFindAgencies">

            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>