@extends('layouts.app')

@section('content')


    <!-- STAFF
    ==========================================-->

    <div id="tf-about">
        <div class="container">


            <div class="section-title center">
                <div class="bloctitle">
                    <img style="position:absolute;margin-top:-50px;margin-left:-510px;" src="../img/1905.gif">
                    <h2>Les<strong> Territoires</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div>


            <div id="team" class="row">
                <div class="item">
                    <h5 style="color:#ff4e22">World Map</h5>

                    <div class="thumbnail">
                        <br>
                        <img style="width:1050px;height:788px;margin-left:25px;position:absolute;" src="../img/worldmap.jpg">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br>


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