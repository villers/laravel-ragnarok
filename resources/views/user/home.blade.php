@extends('layouts.app')

@section('content')
    <!-- Home Page
        ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>MON <strong><span class="color">COMPTE</span></strong></h1>


                Vous avez {{$nb_cashpoint}} cash point
            </div>
        </div>
    </div>
@endsection
