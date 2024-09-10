<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nickelback Ipsum - the most rockin' ipsum generator on the internet.</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">


    {{--    <script src="{{ mix('js/app.js') }}"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link href="{{secure_asset('css/main.css?r='.rand(0000,9999))}}" rel="stylesheet">

    <script defer data-domain="nickelback-ipsum.com" src="https://plausible.io/js/script.js"></script>
    <script>window.plausible = window.plausible || function () {
            (window.plausible.q = window.plausible.q || []).push(arguments)
        }</script>


</head>

<body class="font-sans antialiased">


<!-- Page Content -->
@yield('content')
<style>
    a {
        color: #1a1a1a;
        text-decoration: none;
    }

    a:hover {
        color: #000;
        text-decoration: underline;
    }
</style>
<section class="footer border-top py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <div class="" style="gap: 10px;">
                    <a href="https://songbox.com?ref=nickelIpsum">Powered by Songbox |</a>
                    <a href="/about">About Nickelback Ipsum |</a>
                    <a href="mailto:michael@songbox.com">Contact</a>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <style>
                        .pizzabtn {
                            background: #333333;
                            border-radius: 7px;
                            font-size: 12px;
                            color: white;
                            padding: 0px 10px;
                            font-weight: bold;
                            height: 32px;
                        }

                        .pizzabtn:hover {
                            text-decoration: none;
                            color: white;
                        }
                    </style>
                    <div class="d-flex justify-content-center text-align-center">
                        <a href="https://buymeacoffee.com/gigamick" target="_blank"
                           class="pizzabtn d-flex align-items-center">&#x1F355; Buy me a Pizza</a>
                    </div>
                    <div class="spacer mx-4">|</div>
                    {{--                        <a href="buymeacoffee.com/gigamick" class="text-muted">Sponsor on Github</a>--}}
                    <a href="https://github.com/sponsors/Gigamick" target="_blank"
                       class="pizzabtn d-flex align-items-center" style="gap: 8px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                        Sponsor on Github</a>
                </div>

            </div>
        </div>
    </div>
</section>

</section>

</div>

</body>
</html>
