@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>Créer <strong>une catégorie</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <hr/>

            {!! Form::open(['route' => 'category.store']) !!}

            @include('admin.category._form', ['submitButtonText' => 'Créer une catégorie'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection