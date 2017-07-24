@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>{{ $news->title }}</h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <p>{!! $news->body !!}</p>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection