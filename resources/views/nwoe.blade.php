@extends('layouts.app')

@section('content')


    <!-- STAFF
    ==========================================-->

    <div id="tf-about">
        <div class="container">
            <div class="section-title center">
                <div class="bloctitle">
                    <img style="position:absolute;margin-top:-50px;margin-left:-510px;width:150;height:150px;" src="../img/ship.png">
                    <h2><strong>Naval</strong> War Of Emperium</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div>

            <div id="team" class="owl-carousel owl-theme row">
                <div class="item">
                    <h5 style="color:#986b45">Actualités</h5>
                    <div class="thumbnail">
                        <br>
                              <p>Pour plus d'informations, merci de bien vouloir consulter le guide du <a href="https://forum.ro-play.fr/index.php?/topic/7-naval-war-of-emperium/">Forum</a></p>
                              <br><br>
                              <p><i>Page en cours de développement...</i></p>
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