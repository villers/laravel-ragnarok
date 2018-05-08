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

       
                        <br>
                        <img style="width:75%; margin:25px;" src="../img/worldmap.jpg">
                     
                        <div class="row" id="team">
                               <br><br>
                            <h2 style="font-size:22px; margin-right:15px;">Liste &nbsp;des&nbsp; régions</h2>
                            <br>
                            <p style="margin-right:15px;"><i>Cliquez sur une des régions pour directement y accéder.</i></p>
                            <br>
                <ul class="list-unstyled" style="margin-bottom:50px;">
                    @foreach($regions as $region)
                        <li style="margin-bottom:5px;"><a href="/territoire#{{$region['name']}}">{{$region['name']}}</a></li>
                    @endforeach
                </ul>
            </div>



        

                </div>

            </div>
<br><br>
            <div id="team" class="row">
                @foreach($regions as $region)
                    <h5 id="{{$region['name']}}">{{$region['name']}}</h5>
                    @foreach($region['totem'] as $territoire)
                        <div class="row" style="margin:15px; padding:10px;">
                            <img style="width: 100px; margin-left:20%; margin-right:25%;" src="{{ asset('img/territoire/map/'.$territoire->map_territoire.'.bmp') }}" alt="{{$territoire->map_territoire}}">

                            <ul style="text-align:center; margin-top:20px;">
                                <li>{{$territoire->map_territoire}}</li>
                                @if ($territoire->conquerant_territoire == 'Inoccupé')
                                    <li>Le territoire est [<i style="color:red;">inoccupé]</i></li>
                                @else
                                    <li>Occupé par [<i style="color:blue;">{{$territoire->conquerant_territoire}}</i>]</li>
                                @endif
                            </ul>
                        </div>
                    @endforeach
                    <br>
                @endforeach
                <a href="{{route('territoire')}}" class="btn btn-primary text-center" style="width: 100px; margin: 0 auto; display: block">Retour</a>
                <br>
            </div>

        </div>
        @endsection

        @section('script')
            <script>
                $('.navbar-default').addClass('on');
            </script>
@endsection
