@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-about">

        <div class="container">
            <div class="section-title center text-center">
                <div class="bloctitleqeel">
                    <img style="position:absolute;margin-top:-70px;margin-left:-530px;" src="../img/giphy.gif">
                    <h2>Shop de <strong> {{$vending->char->name}}</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>name</th>
                    <th>rafine</th>
                    <th>slot</th>
                    <th>cards</th>
                    <th>price</th>
                    <th>quantité</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($vending->vendingItems as $vendingItem)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td >{{$vendingItem->cartInventory->item->id}}</td>
                        <td>
                            <img src="http://imgs.ratemyserver.net/items/small/{{$vendingItem->cartInventory->item->id}}.gif" alt="">
                            &nbsp;{{$vendingItem->cartInventory->item->name_english}}
                        </td>
                        <td>{{$vendingItem->cartInventory->refine}}</td>
                        <td>
                            @if($vendingItem->cartInventory->item->slots)
                            [{{$vendingItem->cartInventory->item->slots}}]
                            @endif
                        </td>
                        <td>{{$vendingItem->cartInventory->getCards()}}</td>
                        <td>{{$vendingItem->price}} z</td>
                        <td>{{$vendingItem->amount}}</td>
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