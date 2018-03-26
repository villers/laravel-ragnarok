@extends('layouts.app')

@section('content')
    <br><br>

    <div class="container" style="margin-top:80px;">
        <div class="section-title center text-center">
            <div class="bloctitleqeel">
                <img style="position:absolute;margin-top:-100px;margin-left:-550px;" src="../img/orig.gif">
                <h2>MES<strong> PERSONNAGES</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="alert alert-danger" style="text-align:center;">Pour éffectuer une action sur un personnage, veuillez le déconnecte.</div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Base/Jobs</th>
                <th>Classe</th>
                <th>Guilde</th>
                <th>Map</th>
                <th>Zeny</th>
                <th>Debug</th>
            </tr>
            </thead>
            <tbody>
            @foreach($chars as $char)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$char->name}}</td>
                    <td>{{$char->base_level}} / {{$char->job_level}}</td>
                    <td>{{\App\Lib\Ragnarok\Jobs::get($char->class)}}</td>
                    <td>
                        @if($char->guild)
                            {{$char->guild->name}} &nbsp;
                            <img style="margin-right:10px;margin-left:10px;" src="{{route('emblem', $char->guild->guild_id)}}" alt="{{$char->guild->name}}" />
                        @else
                            -
                        @endif
                    </td>
                    <td>{{$char->last_map}}</td>
                    <td>{{$char->zeny}}</td>
                    <td>
                        @if($char->online === 0)
                            <a href="{{ route('user.post.reset.chars') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('reset-char-form-{{$char->char_id}}}').submit();">
                                Débugger
                            </a>

                            <form id="reset-char-form-{{$char->char_id}}}" action="{{ route('user.post.reset.chars') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                <input id="char_id" type="hidden" name="char_id" value="{{ $char->char_id }}">
                            </form>
                        @else
                            <strong style="color:green;">En ligne</strong>
                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection