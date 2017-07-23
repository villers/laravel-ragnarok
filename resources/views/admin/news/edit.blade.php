@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>Editer<strong> une news</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            {!! Form::model($news, ['method' => 'patch', 'route' => ['news.update', $news->id]]) !!}

            @include('admin.news._form', ['submitButtonText' => 'Valider'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection