@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>Editer<strong> une catégorie</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            {!! Form::model($category, ['method' => 'patch', 'route' => ['category.update', $category->id]]) !!}

            @include('admin.category._form', ['submitButtonText' => 'Update category'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection