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
                    <th>Pseudo</th>
                    <th>Classe</th>
                    <th>Guild</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($vendings as $vending)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$vending->char->name}}</td>
                        <td>{{\App\Lib\Ragnarok\Jobs::get($vending->char->class)}}</td>
                        <td>
                            @if($vending->char->guild)
                                {{$vending->char->guild->name}} &nbsp;
                                <img src="{{route('emblem', $vending->char->guild->guild_id)}}" alt="{{$vending->char->guild->name}}" />
                            @else
                                -
                            @endif
                        </td>
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