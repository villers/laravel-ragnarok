@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>404<strong> Page Not Found</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <img style="display: block; margin: 0 auto; width: 25%" src="{{asset('img/404.png')}}" alt="">
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection