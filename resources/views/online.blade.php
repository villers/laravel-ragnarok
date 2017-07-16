@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>Qui<strong> est en ligne ?</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pseudo</th>
                        <th>Classe</th>
                        <th>Guild</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chars as $char)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$char->name}}</td>
                            <td>{{\App\Lib\Ragnarok\Jobs::get($char->class)}}</td>
                            <td>
                                @if($char->guild)
                                    {{$char->guild->name}} &nbsp;
                                    <img src="{{url('/emblem/'. $char->guild->guild_id)}}" alt="*" />
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
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection