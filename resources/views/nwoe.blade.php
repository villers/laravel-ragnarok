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
                    <h5 style="color:#986b45">GUIDE COMPLET</h5>
                    <div class="thumbnail">
                        <br>
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