@extends('layouts.app')

@section('content')
    <br><br>
    <!-- ACTUALITES
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="section-title center">
                <h2 style="text-align: center;"><strong>Actualité</strong> du Serveur</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        @foreach($news as $newsItem)
                            <div class="item">
                                <h5>{{$newsItem->title}}</h5>
                                <h4>{{ $newsItem->created_at->format('Y-m-d') }}</h4>
                                {!! $newsItem->body !!}
                                @if($newsItem->category)
                                    <h6>Category: <b>{{ $newsItem->category->title }}</b></h6>
                                @endif
                            </div>
                            @if(!$loop->last)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    {{@$news->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>
@endsection