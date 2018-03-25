
@extends('layouts.app')

@section('content')







    <div id="tf-about">
        <div class="container">
            <div class="section-title center">

            </div>


            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial">


                        <div class="section-title center">
                            <h2 style="text-align:center;">Créer <strong><span class="color">un compte</span></strong>
                                <div class="line">
                                    <hr>
                                </div>
                            </h2>
                        </div>

                        <img style="position:absolute;top:30px;right:50px;" src="../img/novice.png">




                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('userid') ? ' has-error' : '' }}">
                                <label for="userid" class="col-md-4 control-label">Login</label>

                                <div class="col-md-4">
                                    <input id="userid" type="text" class="form-control" name="userid" value="{{ old('userid') }}" required autofocus>

                                    @if ($errors->has('userid'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('userid') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-4">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                                <label for="password-confirm" class="col-md-4 control-label">Password Confirmation</label>

                                <div class="col-md-4">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label for="birthdate" class="col-md-4 control-label">Date de naissance</label>

                                <div class="col-md-4">
                                    <input id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required>

                                    @if ($errors->has('birthdate'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="sex" class="col-md-4 control-label">Sexe</label>

                                <div class="col-md-4">
                                    <label class="radio-inline"><input type="radio" name="sex" value="M" checked>Masculin</label>
                                    <label class="radio-inline"><input type="radio" name="sex" value="F">Féminin</label>

                                    @if ($errors->has('sex'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sex') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label for="captcha" class="col-md-4 control-label">Captcha</label>

                                <div class="col-md-4">
                                    @captcha
                                    <input type="text" id="captcha" name="captcha" class="form-control">

                                    @if ($errors->has('captcha'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="text-align:center;">
                                        S'inscrire
                                    </button>
                                </div>
                            </div>

                        </form>

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