@extends('layouts.app')

@section('content')
    <!-- Home Page
        ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Bienvenue sur <strong><span class="color">ROPLAY</span></strong></h1>
                <p class="lead">Découvrez une expérience <strong>unique</strong> !</p>
                {{link_to_route('news', '', null, ['class' => 'fa fa-angle-down page-scroll'])}}
            </div>
        </div>
    </div>
@endsection
