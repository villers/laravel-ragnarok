@include('errors.list')

<div class="form-group">

    {!! Form::label('title', 'Category name:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-success']) !!}
    {{link_to_route('category.index', 'Cancel', [], ['class' => 'btn btn-danger'])}}
</div>