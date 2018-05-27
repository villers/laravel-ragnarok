@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-about">

        <div class="container">
            <div class="section-title center text-center">
                <div class="bloctitleqeel">
                    <img style="position:absolute;margin-top:-70px;margin-left:-530px;" src="../img/giphy.gif">
                    <h2>Qui est en <strong> ligne ?</strong></h2>

                    <a style="float:right; margin-top:-10px; background-color:#45c367;" href="{{route('vendings')}}"
                       class="btn btn-primary">Afficher les shops</a>

                    <div class="line">
                        <hr>
                    </div>
                </div>

            </div>


            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Pseudo (sex)</th>
                    <th>Classe</th>
                    <th>Guild</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($chars as $char)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td class="{{$char->sex === 'M' ? 'male' : 'femele'}}">{{$char->name}}</td>
                        <td>{{\App\Lib\Ragnarok\Jobs::get($char->class)}}</td>
                        <td>
                            @if($char->guild)
                                {{$char->guild->name}}
                                <img style="margin-right:10px;margin-left:10px;"
                                     src="{{route('emblem', $char->guild->guild_id)}}" alt="{{$char->guild->name}}"/>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <div class="discord">
                <iframe src="https://discordapp.com/widget?id=432880730054328342&theme=dark
" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection