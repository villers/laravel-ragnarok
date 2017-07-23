@extends('layouts.app')

@section('content')
    <br><br>
    <!-- INFORMATIONS
    ==========================================-->
    <div id="tf-team">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/02.png') }}" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h3><strong>Informations</strong></h3>
                            <h2><strong>ROPLAY</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">Basé sur l'épisode <strong>11.3</strong> et en constante évolution, <strong>ROPLAY</strong> vous propose du contenu inédit se mariant parfaitement avec le jeu.</p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Système PK & Territoires</strong> - <em>Qui pimente l'aventure</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Prontera revisité</strong> - <em>Printemps / Eté / Automne / Hiver</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>3/3/Custom</strong> - <em><u>Drop</u>: Mob: <strong>x3</strong> - Mini-Boss: <strong>x2</strong> - MVP(+mini-boss card): <strong>x1</strong></em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Lvl Max</strong> - <em>99/70</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Stats Max</strong> - <em>99</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Aspd Max</strong> - <em>190</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>No Cast</strong> - <em>Dex 150</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Autre</strong> - <em>Pré-Renewal - Pas de Classes 3</em>
                            </li>
                        </ul>
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