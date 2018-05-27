@extends('layouts.app')

@section('content')


    <!-- STAFF
    ==========================================-->

    <div id="tf-about">
        <div class="container">
            <div class="section-title center">
                <div class="bloctitle">
                    <img style="position:absolute;margin-top:-50px;margin-left:-510px;" src="../img/r05url.gif">
                    <h2>Notre<strong> Équipe</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div>

            <div id="team" class="owl-carousel owl-theme row">

                <div class="item">
                    <h5 style="color:#ff4e22">Administrateurs</h5>
                    <div class="thumbnail">

                        <img src="{{ asset('img/team/lyrics.gif') }}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Lyrics</h3>

                            <p style="font-style: italic; text-align:right;margin-right:30px;"><u><strong>Administrateur Fondateur</strong></u></p>
                            <img style="margin-right:50px;float:right;" src="">
                            <br>
                            <div class="staff">
                                <p>Je m'occupe des tâches générales.<br>
                                    Ma spécialité est de créer des Maps et inventer des scénarios</p>
                            </div>
                        </div>
                        <br>

                        <hr>

                        <img src="{{asset('img/team/ChetK.png')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">ChetK</h3>

                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Co-Admin</strong></u></p>
                            <br>
                            <div class="staff">
                                <p>Je m'occupe de l'Emulateur & Client.<br>
                                    Ma spécialité est de scripter !</p>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>

                <br>
                <div class="item">
                    <h5 style="color:#039443;">Game Master</h5>

                    <div class="thumbnail">

                        <img src="{{asset('img/team/yervin.bmp')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Yervin</h3>
                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Animateur</strong></u></p>
                            <div class="staff">
                                <p>Je m'occupe des events et j'anime le serveur !</br>Ma spécialité, animateur radio sur MixLor</p>
                            </div>
                        </div>
                        <br><br>

                        <hr>

                        <img src="{{asset('img/team/cerise.png')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Cerise</h3>
                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Animatrice</strong></u></p>
                            <div class="staff">
                                <p>Je m'occupe des events et j'anime le serveur !</p>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                </div>
<br>
                <div class="item">
                    <h5 style="color:#534a34;">Techniciens / scripteurs</h5>

                    <div class="thumbnail">
                        <img src="{{asset('img/team/Farah.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Farah</h3>
                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Sécurisation de l'environnement</strong></u></p>
                            <div class="staff">
                                <p>Je m'occupe de sécuriser le serveur dédié et ses alentours.<br>Ainsi que la maintenance et l'aide aux scripts.</p>
                            </div>
                        </div>
                        <br><br><hr>

                        <img src="{{asset('img/team/')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Llenn</h3>
                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Scripteur</strong></u></p>
                            <div class="staff">
                                <p>Je m'occupe des créations de scripts</br></p>
                            </div>
                        </div>
                        <br><br>

                        <hr>

                        <img src="{{asset('img/team/')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Eik'</h3>
                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Scripteur / Correcteur</strong></u></p>
                            <div class="staff">
                                <p>Je m'occupe de corriger les scripts</p>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                </div>

                <br>

                <div class="item">
                    <h5 style="color:#0394b5;">Guard</h5>

                    <div class="thumbnail">
                        <img src="{{asset('img/team/venther.png')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Venther</h3>
                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Chef Helper</strong></u></p>
                            <div class="staff">
                                <p>Je veille à la stabilité du serveur et je surveille les joueurs !<br>
                                    J'apporte aussi un maximum de connaissances afin d'aider les joueurs.<br>
                                    spécialité, database sur pattes. </p><br>
                            </div>
                        </div>


                        <hr>

                        <img src="{{asset('img/team/zeleph.png')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Ghibli</h3>
                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Helper</strong></u><br></p>
                            <div class="staff">
                                <p>Je m'occupe de transmettre les requests aux administrateurs<br>Ma spécialité, aider les joueurs et guide de quêtes.</p>
                            </div>
                        </div>
                        <br><br><br><br>

                    </div>
                </div>

                <br>

                <div class="item">
                    <h5 style="color:#a88334;">Modérateurs</h5>

                    <div class="thumbnail">
                        <img src="{{asset('img/team/nhanar.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3 style="float:left;">Nhanar</h3>
                            <p style="font-style: italic; text-align:right; margin-right:30px;"><u><strong>Modérateur Discord</strong></u></p>
                            <div class="staff">
                                <p>Je veille à la bonne conduite des joueurs<br>
                                    Je m'occupe de la gestion des channels et des renseignements.<br>
                                    Ma spécialité, l'aide, l'ordre et la discipline ;)</p><br>
                            </div>
                        </div>

                        <br><br>

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