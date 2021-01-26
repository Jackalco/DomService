<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/company.css')}}">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>

        <title>DOM Service</title>

    </head>
    <body>
        @include('layouts.nav')
        <main>
            <section class="aboutCompany">
                <h1 class="titleAboutCompany">L'entreprise</h1>
                <div class="contentAboutCompany">
                    <p class="textAboutCompany">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat sapien ornare, ultricies dui sed, lobortis nisl. In odio enim, condimentum in pharetra ac, faucibus sed odio. Duis pharetra erat in libero sagittis, in luctus magna sagittis. Ut augue arcu, congue in tristique sit amet, gravida ac nunc. Duis sollicitudin nulla dolor, at mattis libero congue id. Etiam ornare, urna sed pharetra sodales, diam lectus posuere velit, id facilisis elit nibh vitae tellus. Integer ut lorem id lacus pellentesque gravida. Fusce pellentesque ut magna sed consectetur. Phasellus leo felis, luctus at est vitae, lacinia vehicula dolor. Quisque at feugiat enim.
                    </p>
                    <img class="imageAboutCompany" src="{{ asset('images/img6.jpg') }}" alt="img6">
                </div>
                
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>