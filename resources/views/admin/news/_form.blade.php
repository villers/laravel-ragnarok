@include('errors.list')

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Publish date:') !!}
    {!! Form::input('text', 'created_at', isset($news) ? $news->created_at : Carbon::now() , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', $categories, isset($news) ? $news->category->id : null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::button($submitButtonText, ['type' => 'submit', 'class' => 'btn btn-success']) !!}
    {{link_to_route('admin.news.index', 'Cancel', [], ['class' => 'btn btn-danger'])}}
</div>