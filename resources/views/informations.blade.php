@extends('layouts.app')

@section('content')

    <!-- INFORMATIONS
    ==========================================-->

    <div id="tf-about">
        <div class="container">

            <div class="section-title center">
                <div class="bloctitle">
                    <img style="position:absolute;margin-top:-70px;margin-left:-530px;" src="../img/giphy2.gif">
                    <h2>
                        <strong>Informations</strong> Générales
                        <div class="line">
                            <hr>
                        </div>
                    </h2>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial">
                        <h3 style="background-color: rgba(250,250,250,0.9);text-align:center;margin:20px;padding:10px;box-shadow: inset rgba(255,255,255,0.4) 0px 1px 0px, inset rgba(255,255,255,0.2) 0px 0px 0px 1px, rgba(0,0,0,0.2) 0px 1px 4px;color:orange;font-size:20px;">
                            <strong>INFORMATION DE BASE</strong>
                        </h3>
                        <br>
                        <img src="../img/02.png">


                        <div class="section-title">

                            <p class="intro">Basé sur l'épisode <strong>11.3</strong> et en constante évolution, <strong>ROPLAY</strong> vous propose du contenu inédit créé par l'équipe, se mariant parfaitement avec le jeu.</p>

                            <ul class="about-list">
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>3 / 3 / Custom</strong> - <em><u>Drop</u>: Mob: <strong>x3</strong>  -  <u>MVP & Mini-boss card</u>: <strong>x1</strong></em>
                                </li>
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Pré-Renewal</strong> - <em>Pas de Classes 3</em>
                                </li>
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Capitale: </strong>Prontera revisité - <em style="color:green;">Printemps</em> / <em style="color:orange;">Eté</em> / <em style="color:brown;">Automne</em> / <em style="color:blue;">Hiver</em>
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
                                    <strong>Perte d'exp à la mort</strong> - <em>1%</em>
                                </li>
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Battleground</strong> - <em style="color:red;">Inactif</em>
                                </li>
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Mode PK</strong> - <em>Uniquement sur les maps territoires</em>
                                </li>
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Quêtes répétable</strong> - <em>Rate x1</em>
                                </li>
                                <li>
                                    <span class="fa fa-dot-circle-o"></span>
                                    <strong>Evènements inédits</strong> - <em>NWoE ~ Territoires ~ Death Marathon ~ Battle Square ~ Training ~ Tournois.</em>
                                </li>


                            </ul>
                        </div>

                        <h3 style="background-color: rgba(250,250,250,0.9);text-align:center;margin:20px;padding:10px;margin-top:50px;box-shadow: inset rgba(255,255,255,0.4) 0px 1px 0px, inset rgba(255,255,255,0.2) 0px 0px 0px 1px, rgba(0,0,0,0.2) 0px 1px 4px;color:#35b530;font-size:20px;">
                            <strong>Les Npc principaux</strong>
                        </h3>
                        <br>
                        <p style="text-align:center;font-size:14px;">Les Npc regroupés dans cette partie se trouvent principalement à Prontera, la capitale de Ro-Play.</p>
                        <p style="text-align:center;font-size:12px;color:red;"><u><i>Les Npc sont en Français.</u></i></p>
                        <br><br><br>
                        <img style="position-absolute;margin-top:10px;margin-bottom:10px;margin-left:100px;" src="../img/warpeur.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Warpeur</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Toutes les villes / Prontera <strong style="color:blue;"> 160 - 187</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Le warpeur vous permet d'acceder aux villes et donjons <strong>niveau 1</strong> par téléportation. Cependant vous devez les débloquer au préalable.</p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:-30px;margin-bottom:10px;margin-left:90px;" src="../img/10075.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Healeur</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Toute les villes</i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Le Healeur est invisible et bénie en permanence les villes de Ro-Play. Vos HP/SP se régénère plus rapidement en ville.</p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:10px;margin-bottom:10px;margin-left:95px;" src="../img/stylist.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Stylist</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Prontera <strong style="color:blue;"> 146 - 169</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Le Stylist vous propose un large pannel de style: Coiffure:-- / Couleurs cheveux:-- / Couleur vêtements:--</p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:10px;margin-bottom:10px;margin-left:110px;" src="../img/reset.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Reset skill / stats</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Prontera <strong style="color:blue;"> 148 - 189</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Votre premier reset skill / stats est gratuit, par la suite vous devrez payer <strong>100.000z skill ou stats, 200.000 les deux.</strong></p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:50px;margin-bottom:10px;margin-left:110px;" src="../img/parametre.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Paramètres</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Prontera <strong style="color:blue;"> 217 - 185</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Le npc paramètre vous permet de save vos config tel que: <strong>Auto loot / Show exp / Rates / Show delay / Show zeny / Up time.</strong></p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:0px;margin-bottom:10px;margin-left:80px;" src="../img/teamxp.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Team xp</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Prontera <strong style="color:blue;"> 118 - 157</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Le Team Manager vous permet de créer une annonce pour rejoindre une team exp, ou rejoindre la votre.</p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:10px;margin-bottom:10px;margin-left:105px;" src="../img/pvp.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>PvP Manager</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Prontera <strong style="color:blue;"> 165 - 164</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Le Pvp Manager vous permet d'accéder aux arènes de combats, dans ces arènes aucune limite.</p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:10px;margin-bottom:10px;margin-left:105px;" src="../img/ares.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Arès</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Prontera <strong style="color:blue;"> 215 - 178</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Le npc Arès vous permet de consulter le classement PvP ainsi que ses statistiques.</p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:10px;margin-bottom:10px;margin-left:70px;" src="../img/battlesquare.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Battle Square</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Prontera <strong style="color:blue;"> 163 - 190</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Ce npc vous permet d'accéder à l'évènement Battle Square, vous y trouverez toute les informations nécéssaires.</p>

                        <br><hr><br>

                        <img style="position-absolute;margin-top:10px;margin-bottom:10px;margin-left:105px;" src="../img/1905.gif">
                        <p style="text-align:center;font-size:18px;"><strong><u>Territory Manager</u></strong></p>
                        <p style="text-align:center;font-size:12px;"><i><u>Position</u>: Prontera <strong style="color:blue;"> 164 - 175</strong></i></p>
                        <br>
                        <p style="text-align:center;font-size:14px;">Le npc Territory Manager vous permet de consulter les territoires en votre possesion et d'avoir une vue globale sur les régions.</p>
                        
                        <br>
                        <h3 style="background-color: rgba(250,250,250,0.9);text-align:center;margin:20px;padding:10px;margin-top:100px;box-shadow: inset rgba(255,255,255,0.4) 0px 1px 0px, inset rgba(255,255,255,0.2) 0px 0px 0px 1px, rgba(0,0,0,0.2) 0px 1px 4px;color:#35b530;font-size:20px;">
                            <strong>Les commandes disponibles</strong>
                        </h3>
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
