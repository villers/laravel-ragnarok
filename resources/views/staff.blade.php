@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Notre<strong> Équipe</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div id="team" class="owl-carousel owl-theme row">
                <div class="item">
                    <div class="thumbnail">
                        <img src="{{ asset('img/team/sulfure.bmp') }}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Lyrics</h3>
                            <p>Administrateur Fondateur</p>
                            <p>je m'occupe des taches générales.<br>Ma particularitée est de créer des Map et inventer des scénarios</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('img/team/fuuki.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Fuuki</h3>
                            <p>Co-Admin</p>
                            <p>Je m'occupe de l'Emulateur & Client. Ma particulariter est de scripter !</br></p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('img/team/mimi.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Kitsune</h3>
                            <p>Guard</p>
                            <p>Je veille à la stabilité du serveur et je surveille les joueurs !</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="{{asset('img/team/void.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Yervin</h3>
                            <p>Animateur</p>
                            <p>Je m'occupe des events et j'anime le serveur !</br>Ma particularitée, animateur radio sur MixLor</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection