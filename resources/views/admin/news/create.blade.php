@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>Créer <strong>une news</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            @unless (count($categories))
                <div class="alert alert-danger">
                    {{link_to_route('category.create', 'Créer une catégorie')}} first.
                </div>
            @endunless

            {!! Form::open(['route' => 'news.store']) !!}

            @include('admin.news._form', ['submitButtonText' => 'Create'])

            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection