<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Serveur privé Ragnarok">
    <meta name="keywords" content="Ragnarok, Ragnarok Online, RO PLAY, roplay, replay">
    <meta name="author" content="Fuuki">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon-114x114.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">

    <base href="/">
    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    @yield('style')
</head>
<body>
    @include('layouts.header')

    <div id="tf-about">
        <div class="container">

            <div class="section-title center">
                <div class="bloctitle">
                    <img style="position:absolute;margin-top:-70px;margin-left:-530px;" src="../img/giphy2.gif">
                    <h2>
                        <strong>Statistiques</strong>
                        <div class="line">
                            <hr>
                        </div>
                    </h2>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery.1.11.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <script>
        $('.navbar-default').addClass('on');
    </script>
</body>
</html>