@extends('layouts.app')

@section('content')

    <!-- ACTUALITES
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="section-title center">
                <div class="bloctitle">
                    <img style="position:absolute;margin-top:-20px;margin-left:-460px;" src="../img/actu.gif">
                    <h2><strong>Actualité</strong> du Serveur
                        <div class="line">
                            <hr>
                        </div>
                    </h2>
                </div>
            </div>
            <br>

            <div class="row">
                <br>
                <div class="panel-group">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">
                                    <img src="../img/coupe.png" style="margin-top:-30px;">
                                    <div class="linetitle" style="text-align:center;">
                                        <strong style="margin-right:20%;">TOURNOIS</strong><img src="../img/fleche.png" style="float:right;">
                                        <div class="line">
                                            <div class="line2">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>


                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">

                                <h2 style="text-decoration:underline;font-style: italic;font-size: 14px;">Horaires :</h2>
                                <br>
                                <p>Dimanche / 20h30 &nbsp;&nbsp; <strong>[Durée ~ 1h00]</strong></p>
                                <p><strong>Début du prochain tournois le:  -- / -- / ----</strong></p>
                                <img style="padding-right:10px;" src="../img/coup.png">
                                <p style="color:#d9ad30;text-align:left;margin-top:20px;text-decoration:underline;"><strong>Champion de la semaine:</strong> </p>
                                <br>
                                <a href="https://forum.ro-play.fr/index.php?/topic/5-tournois-pvp/" ><img src="../img/info.png" style="width:40px;height:40px;margin-top:-20px;float:right;"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">
                                    <img src="../img/event.png" style="margin-top:-20px;">
                                    <div class="linetitle">
                                        <strong style="margin-right:20%;">EVENEMENTS</strong><img src="../img/fleche.png" style="float:right;">
                                        <div class="bline">
                                            <div class="bline2">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>


                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">

                                <h2><strong><a style="text-decoration:underline;font-style: italic;font-size: 14px;color:#c42b2f;" href="https://forum.ro-play.fr/index.php?/topic/3-death-marathon/">DEATH MARATHON<a/></strong></h2>

                                <p><strong>Début de l'évènement le:  -- / -- / ----</strong></p>
                                <p style="margin-top:-10px;"><strong>Heure:</strong> -- / --</p>

                                <br>      <h2><strong><a style="text-decoration:underline;font-style: italic;font-size: 14px;color:#c48fde;" href="https://forum.ro-play.fr/index.php?/topic/4-battle-square/">BATTLE SQUARE<a/></strong></h2>

                                <p><strong>Trois jours par semaine: </strong>Mardi / Jeudi / Samedi</p>
                                <p style="margin-top:-10px;"><strong>Durée</strong> 24h</p>

                                <a href="https://forum.ro-play.fr/index.php?/forum/10-ev%C3%A8nements/" ><img src="../img/info.png" style="width:40px;height:40px;margin-top:-20px;float:right;"></a>
                            </div>


                        </div>


                    </div>
                </div>






                <div class="panel-group">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse3">
                                    <img src="../img/woe.png" style="margin-top:-35px;width:70px;height:81px;">
                                    <div class="linetitle">
                                        <strong style="margin-right:20%;">WAR OF EMPERIUM</strong><img src="../img/fleche.png" style="float:right;">
                                        <div class="cline">
                                            <div class="cline2">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>


                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">

                                <h2 style="text-decoration:underline;font-style: italic;font-size: 14px;">Horaires :</h2>


                                <br>
                                <p>20h30 / 22h30 &nbsp;&nbsp; <strong>[Fin Aléatoire]</strong></p>
                                <p>Mardi / Dimanche</p>
                                <p><strong>Début des WoE le  -- / -- / ----</strong></p>
                                <br>


                                <a href="https://forum.ro-play.fr/index.php?/topic/6-war-of-emperium/" ><img src="../img/info.png" style="width:40px;height:40px;margin-top:-20px;float:right;"></a>

                            </div>


                        </div>


                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial">
                        @foreach($news as $newsItem)
                            <div class="item">
                                <h5>{{$newsItem->title}}</h5>
                                <h4>{{ $newsItem->created_at->format('Y-m-d') }}</h4>
                                {!! $newsItem->body !!}
                                @if($newsItem->category)
                                </br>
                                <hr style="  margin: 10px auto;
                                             width: 100%;
                                             height: 5px;
                                             border: none;
                                             background-color: #fee4c1;"></hr>
                                <h4>Categorie: <b>{{ $newsItem->category->title }}</b></h4></br></br>
                                @endif
                            </div>
                            @if(!$loop->last)

                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="panel-group2">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse4">
                                    <img src="../img/1905.gif" style="width:41px;height:100px;margin-top:-35px;margin-left:15%;">
                                    <div class="linetitle">
                                        <strong style="margin-right:20%;">LES TERRITOIRES</strong><img src="../img/fleche.png" style="float:right;">
                                        <div class="dline">
                                            <div class="dline2">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>


                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
<br>
                                <strong><a style="text-decoration:underline;font-style: italic;font-size: 14px;" href="https://forum.ro-play.fr/index.php?/topic/8-les-territoires/">Guide Forum<a/></strong>
                                <br><br>
                                <p><strong>Territoires disponibles:</strong> [<strong style="color:green;">{{ $territoire['available'] }}</strong>] sur [<strong style="color:black;">{{ $territoire['total'] }}</strong>]</p>
                                <p><strong>Territoires conquis:</strong> [<strong style="color:red;">{{ $territoire['conquered'] }}</strong>]</p>
                                <a href="{{route('territoire')}}" ><img src="../img/info.png" style="width:40px;height:40px;margin-top:-40px;float:right;margin-right:20px;"></a>
                            </div>


                        </div>


                    </div>
                </div>





                <div class="panel-group2">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse5">
                                    <img src="../img/ship.png" style="width:120px;height:120px;margin-left:5%;margin-top:-40px;">
                                    <div class="linetitle">
                                        <strong style="margin-right:20%;">NAVAL WAR OF EMPERIUM</strong><img src="../img/fleche.png" style="float:right;">
                                        <div class="eline">
                                            <div class="eline2">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
<br>
                                <strong><a style="text-decoration:underline;font-style: italic;font-size: 14px;" href="https://forum.ro-play.fr/index.php?/topic/7-naval-war-of-emperium/">Guide Forum<a/></strong>
                                <br><br>
                                <p><strong>Bateaux disponibles:</strong>7/14</p>
                                <p><strong>Bateaux actifs:</strong>7</p>
                                <a href="https://www.ro-play.fr/nwoe" ><img src="../img/info.png" style="width:40px;height:40px;margin-top:-40px;float:right;margin-right:20px;"></a>
                            </div>
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