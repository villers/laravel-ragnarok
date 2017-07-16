@extends('layouts.app')

@section('content')
    <div id="tf-clients" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h1>Se <strong><span class="color">Connecter</span></strong></h1>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('userid') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Identifiant</label>

                        <div class="col-md-4">
                            <input id="email" type="text" class="form-control" name="userid" value="{{ old('userid') }}" required autofocus>

                            @if ($errors->has('userid'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('userid') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Mot de passe</label>

                        <div class="col-md-4">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Se Connecter
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Mot de passe oublié?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection