@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>Administration<strong></strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div class="form-group">
                {{link_to_route('news.index', 'Manage News', [], ['class' => 'btn btn-primary'])}}
                {{link_to_route('category.index', 'Manage Catégorie', [], ['class' => 'btn btn-primary'])}}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection
