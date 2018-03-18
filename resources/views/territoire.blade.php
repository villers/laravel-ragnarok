@extends('layouts.app')

@section('content')


    <!-- STAFF
    ==========================================-->

    <div id="tf-about">
        <div class="container">

            <div class="row" id="team">
                <ul class="list-unstyled">
                    @foreach($regions as $region)
                        <li><a href="#{{$region['name']}}">{{$region['name']}}</a></li>
                    @endforeach
                </ul>
            </div>

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

            <div id="team" class="row">
                @foreach($regions as $region)
                    <h5 id="{{$region['name']}}">{{$region['name']}}</h5>
                    @foreach($region['totem'] as $territoire)
                        <div class="row">
                            <img style="width: 100px" src="{{ asset('img/territoire/map/'.$territoire->map_territoire.'.bmp') }}" alt="{{$territoire->map_territoire}}">

                            <ul style="margin-left: 120px;">
                                <li>{{$territoire->map_territoire}}</li>
                                @if ($territoire->conquerant_territoire == 'Inoccupé')
                                    <li>Le territoire est inoccupé</li>
                                @else
                                    <li>Occupé par {{$territoire->conquerant_territoire}}</li>
                                @endif
                            </ul>
                        </div>
                    @endforeach
                    <br><br>
                @endforeach
            </div>
        </div>
        @endsection

        @section('script')
            <script>
                $('.navbar-default').addClass('on');
            </script>
@endsection