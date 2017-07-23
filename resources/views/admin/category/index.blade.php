@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>Gestion<strong> des catégories</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div class="form-group">
                {{link_to_route('category.create', 'Add new category', [], ['class' => 'btn btn-success'])}}
            </div>

            <ul class="list-group">
                @foreach($categories as $category)
                    <li class="list-group-item">
                        <div class="pull-right">
                            {{link_to_route('category.edit', 'Éditer', ['id' => $category->id])}}<br>
                            {{link_to_route('category.destroy', 'Supprimer', ['id' => $category->id], ['onclick' => 'return confirm(\'Are you sure you want to delete it?\')'])}}
                        </div>
                        <h4>{{ $category->title }}</h4>

                    </li>
                @endforeach
            </ul>


        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection