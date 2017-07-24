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

            {!! Form::model($news, ['method' => 'patch', 'route' => ['admin.news.update', $news->id]]) !!}

            @include('admin.news._form', ['submitButtonText' => 'Valider'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('script')

    <!-- CKEditor init -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
    <script>
        $('.navbar-default').addClass('on');
        var route_prefix = "{{ url(config('lfm.prefix')) }}";

        CKEDITOR.config.extraPlugins = 'justify';

        $('textarea[name=body]').ckeditor({
            height: 100,
            filebrowserImageBrowseUrl: route_prefix + '?type=Images',
            filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: route_prefix + '?type=Files',
            filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
        });
    </script>
@endsection