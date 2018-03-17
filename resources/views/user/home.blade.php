@extends('layouts.app')

@section('content')
    <!-- Home Page
        ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="section-title center">
                <div class="bloctitle">
                    <h2 style="">MON <strong><span class="color">COMPTE</span></strong></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial">
                        <div class="cashp">
                            <p>Vous avez <strong style="text-decoration:underline;color:#6c9bb4;">{{$nb_cashpoint}}</strong> cash point</p>
                        </div>
                    </div>

                    <div class="bloc3">
                    </div>

                    <div class="bloc3">
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