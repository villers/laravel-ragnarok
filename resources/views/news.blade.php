@extends('layouts.app')

@section('content')
    <br><br>
    <!-- ACTUALITES
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="section-title center">
                <h2 style="text-align: center;"><strong>Actualité</strong> du Serveur</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">
                            <h5>Le Projet</h5>
                            <h4>26/06/2017</h4>

                            <p> <a target="_blank" href="http://www.hostingpics.net" title="Hebergeur d'image"><img src="https://img15.hostingpics.net/pics/186350ZONDAGIRL.gif" border="0" alt="Hebergeur d'image" /></a> <br><br>

                                Je vais vous expliquer brièvement l'objectif et la trame du projet Ro-Play.<br>

                                Nous partons d'une base saine qui se trouve à l'épisode 11.3, donc bien entendu Pré-Renewal sans classes trois.<br><br>

                                <strong>L'objectif :</strong> Retrouver un serveur low rate d'époque avec un équilibre économique, une population grandissante, des WoE historiques, des événements palpitants, des sessions d'exp inoubliables, une bonne cohésion entre tous, une sécurité et stabilité de jeu, un vrai challenge.<br><br>



                                Dans un premier temps, au vu des rates 3/3/custom vous aurez sûrement un peu de taff' pour avoir un perso correct, les innovations sortiront donc au compte gouttes.

                                Il est vraiment important d’assimiler que Ro-Play cherche à retrouver le coté à l'ancienne et non dénaturé du jeu. <br><br>

                                Les deux incontournables, le système de territoires et le Player Killer Mode, deux systèmes farouchement étudiés et élaborés afin qu'ils se fondent dans le jeu et laissent un challenge quasi infini. Tout le monde y trouvera son compte. <br>Ces deux systèmes verront le jour une à deux semaines après l'ouverture du serveur.<br><br>

                                L'immobilier et oui ! Beaucoup de serveurs ont tenté leur chance sans vraiment de succès, c'est pour ça que nous nous sommes sentis obligés de mettre en vente toutes les maisons de Prontera à bon prix ;)  Vous aurez accès à plusieurs fonctionnalités et donc votre chez vous en Capitale. Au total, 95 maisons seront disponibles.<br><br>

                                Créer et façonner sa propre arme évolutive, vous devrez la débloquer au préalable par l'accomplissement d'une quête créée par nos soins <a target="_blank" href="http://www.hostingpics.net" title="Hebergeur d'image"><img src="http://ro-play.org/forum/uploads/emoticons/th_blush.gif" border="0" alt="Hebergeur d'image" /></a> .Une fois acquise, vous ne la lâcherez plus ! Bien entendu, elle sera réglée de façon à ne pas déséquilibrer le jeu.<br><br>

                                Des arènes PvP / GvG inédites, accompagnées de leurs diversités visuelles et fonctions vraiment particulières ! Le PvP, les WoE/GvG et le PK Mode auront des classements et un ratio séparé afin d'avoir une clarté sur leur évolution.

                                À suivre... </p>
                            <p><strong>Fuuki</strong>, RO PLAY.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    {{@$news->links()}}
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