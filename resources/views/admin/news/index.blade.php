@extends('layouts.app')

@section('content')
    <br><br>
    <div id="tf-team">
        <div class="container">
            <div class="section-title center text-center">
                <h2>Gestion<strong> des news</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div class="form-group">
                {{link_to_route('admin.index', '<<', [], ['class' => 'btn btn-primary'])}}
                {{link_to_route('admin.news.create', 'Créer une news', [], ['class' => 'btn btn-success'])}}
            </div>

            <ul class="list-group">
                @foreach($news as $newsItem)
                    <li class="list-group-item">
                        <div class="pull-right text-center">
                            <b>{{ $newsItem->created_at->format('Y-m-d') }}</b>
                            |

                            [ {{link_to_route('admin.news.edit', 'Éditer', ['id' => $newsItem->id])}} | {{link_to_route('admin.news.destroy', 'Supprimer', ['id' => $newsItem->id], ['onclick' => 'return confirm(\'Are you sure you want to delete it?\')'])}} ]
                        </div>
                        <h2>
                            {{link_to_route('admin.news.show', $newsItem->title, ['id' => $newsItem->id])}}
                        </h2>
                        <hr>
                        {!! str_limit(strip_tags($newsItem->body)) !!}
                        <hr>
                        @if($newsItem->category)
                            <h6>Category: <b>{{ $newsItem->category->title }}</b></h6>
                        @endif
                    </li>
                @endforeach
            </ul>

            <div class="text-center">
                {{@$news->links()}}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection