
@extends('layouts.app')

@section('content')
    <!-- Home Page
        ==========================================-->
           <meta name="viewport" content="width=device-width"/>

    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">

                <h1>Bienvenue sur <strong><span class="color">RO-PLAY</span></strong></h1>
                <p class="lead">Découvrez une expérience <strong>unique</strong> ! </p>
                <br>
                <?php
                $ouverture = \Carbon\Carbon::parse('2018/05/04 20:00');
                ?>



                @if (!$ouverture->isPast())
                    <strong style="color:#e3af28; text-shadow: 1px 1px black, -1px -1px #444; font-size:16px;">OUVERTURE</strong>
                    <div class="box">
                        <div class="lead" id="counter" data-date="{{$ouverture}}">
                            <span class="bubble days"></span> <i>jours</i>
                            <span class="bubble hours"></span> <i>heures</i>
                            <span class="bubble min"></span> <i>minutes</i>
                            <span class="bubble sec"></span> <i>secondes</i>
                        </div>
                    </div>
                @endif

 <p style="color:green; font-size:20px; text-decoration:underline;text-shadow: 1px 1px black;"><i>SERVEUR DISPONIBLE</i></p>
 <a href="https://static.ro-play.fr/Ro-Play%20Client.rar" style="color:white;">Cliquez ici pour télécharger le nouveau Full Client.</a> <br>


                <a href="https://forum.ro-play.fr/index.php?/register/" class="myButton" style=""><img src="../img/user.png">&nbsp;&nbsp;INSCRIPTION FORUM</a>
                @if (Auth::guest())
                    <a href="https://www.ro-play.fr/register" class="myButton2"><img src="../img/user.png">&nbsp;&nbsp;INSCRIPTION SITE/SERVEUR</a>
                @endif
                <a href="https://www.ro-play.fr/telechargement" class="myButton3"><img src="../img/dl.png">&nbsp;&nbsp;TÉLÉCHARGEMENT</a></br>
<br>
               
            </div>
        </div>
    </div>
@endsection
