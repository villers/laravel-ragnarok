@extends('layouts.app')

@section('content')
    <div class="text-center">
        <div class="overlay">
            <div class="container" style="margin-top:200px;">
                            <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                            <img style="position:absolute;top:20px;right:110px;width:auto;height:350px;" src="../img/mdp.png">
                            <div id="testimonial">
                <div class="section-title center">
                    <h2 style="margin-right:280px;">CHANGER MON <strong><span class="color">MOT DE PASSE</span></strong>
                    <div class="line">
                        <hr>
                    </div>
                    </h2>
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

                    <div class="form-group" style="margin-right:190px;">
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
    </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection