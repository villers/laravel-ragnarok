@extends('layouts.app')

@section('content')
    <div id="tf-clients" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h1>CHANGER MON <strong><span class="color">MOT DE PASSE</span></strong></h1>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('user.post.password') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('old_user_pass') ? ' has-error' : '' }}">
                        <label for="old_user_pass" class="col-md-4 control-label">Ancien mot de passe</label>

                        <div class="col-md-4">
                            <input id="old_user_pass" type="password" class="form-control" name="old_user_pass" value="{{ old('old_user_pass') }}" required autofocus>

                            @if ($errors->has('old_user_pass'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('old_user_pass') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('user_pass') ? ' has-error' : '' }}">
                        <label for="user_pass" class="col-md-4 control-label">Nouveau mot de passe</label>

                        <div class="col-md-4">
                            <input id="user_pass" type="password" class="form-control" name="user_pass" value="{{ old('user_pass') }}" required autofocus>

                            @if ($errors->has('user_pass'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_pass') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('user_pass_confirmation') ? ' has-error' : '' }}">
                        <label for="user_pass_confirmation" class="col-md-4 control-label">Confirmation du mot de passe</label>

                        <div class="col-md-4">
                            <input id="user_pass_confirmation" type="password" class="form-control" name="user_pass_confirmation" value="{{ old('user_pass_confirmation') }}" required autofocus>

                            @if ($errors->has('user_pass_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_pass_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection