@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-about">

        <div class="container">
            <div class="section-title center text-center">
                <div class="bloctitleqeel">
                    <img style="position:absolute;margin-top:-70px;margin-left:-530px;" src="../img/giphy.gif">
                    <h2>Shop en <strong> ligne ?</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom Vendeur</th>
                    <th>Nom de la boutique</th>
                    <th>Guild</th>
                    <th>Map</th>
                    <th>X</th>
                    <th>Y</th>
                    <th>Sex</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($vendings as $vending)
                    <tr>
                        <th scope="row">{{link_to_route('vendingsItems', $loop->iteration, ['id' => $vending->id])}}</th>
                        <td>{{$vending->char->name}}</td>
                        <td>{{link_to_route('vendingsItems', $vending->title, ['id' => $vending->id])}}</td>
                        <td>
                            @if($vending->char->guild)
                                <img src="{{route('emblem', $vending->char->guild->guild_id)}}" alt="{{$vending->char->guild->name}}" />
                                &nbsp;{{$vending->char->guild->name}}
                            @else
                                -
                            @endif
                        </td>
                        <td>{{$vending->map}}</td>
                        <td>{{$vending->x}}</td>
                        <td>{{$vending->y}}</td>
                        <td>{{$vending->char->sex}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection