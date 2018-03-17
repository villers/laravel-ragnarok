@extends('layouts.app')

@section('content')
    <!-- Home Page
        ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Bienvenue sur <strong><span class="color">RO-PLAY</span></strong></h1>
                <p class="lead">Découvrez une expérience <strong>unique</strong> ! </p>

                <?php
                $beta = \Carbon\Carbon::parse('2018/04/09 20:00');
                $ouverture = \Carbon\Carbon::parse('2018/05/01 09:00');
                ?>

                @if (!$beta->isPast())
                    BÊTA
                    <div class="box">
                        <div class="lead" id="counter2" data-date="{{$beta}}">
                            <span class="bubble beta days"></span> jours
                            <span class="bubble beta hours"></span> heures
                            <span class="bubble beta min"></span> minutes
                            <span class="bubble beta sec"></span> secondes
                        </div>
                    </div>
                @endif

                @if (!$ouverture->isPast())
                    OUVERTURE
                    <div class="box">
                        <div class="lead" id="counter" data-date="{{$ouverture}}">
                            <span class="bubble days"></span> jours
                            <span class="bubble hours"></span> heures
                            <span class="bubble min"></span> minutes
                            <span class="bubble sec"></span> secondes
                        </div>
                    </div>
                @endif

                <a href="http://forum.ro-play.org/index.php?/register/" class="myButton"><img src="../img/user.png" style="float:left; postition:relative; margin-right:10px; opacity:0.9;">INSCRIPTION FORUM</a>
                @if (Auth::guest())
                    <a href="https://www.ro-play.fr/register" class="myButton2"><img src="../img/user.png" style="float:left; postition:relative; margin-right:10px; opacity:0.9;">INSCRIPTION SITE/SERVEUR</a>
                @endif
                <a href="#" class="myButton3"><img src="../img/dl.png" style="float:left; postition:relative; margin-right:10px;">CLIENT COMPLET</a></br>
            </div>
        </div>
    </div>
@endsection
