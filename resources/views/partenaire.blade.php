@extends('layouts.app')

@section('content')

    <!-- PARTENAIRES
    ==========================================-->
    <div id="tf-about">
        <div class="container">

            <div class="section-title center">
                <div class="bloctitle">
                    <h2>Nos<strong> Partenaires</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial">

                        <h5 style="color:#f1981c;">MMORPG.fr</h5>

                        <br>
                        <img src="../img/...">

                        <br><br><br>
                        <div class="mixlor">
                        </div>
                        

                        <h5 style="color:#f1981c;">MixLor Radio</h5>

                        <br>
                        <img src="../img/mixlor.jpg">

                        <br><br><br>
                        <div class="mixlor">
                            <p><a href="http://www.mixlor.com/wp-content/themes/mixlor/player.php"><img src="../img/mix.png" style="position:absolute;"></a></p>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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