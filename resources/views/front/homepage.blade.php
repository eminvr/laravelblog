@extends('front.layouts.master')

@section('title')
    Anasayfa
@endsection

@section('content')
    <div class="col-lg-9 ">
        <!-- Post preview-->
        @foreach ($articles as $article)
            <div class="post-preview">
                <a href="{{route('single', [$article->getCategory->slug,$article->slug])}}">
                    <img src="{{$article->image}}" alt="" class="img-thumbnail w-25">
                    <h2 class="post-title">{{$article->title}}</h2>
                    <p class="post-subtitle">{{Str::limit($article->content,200)}}</p>
                </a>
                <p class="post-meta">
                     
                    <a href="#!">{{$article->getCategory->name}}</a> kategorisine
                     {{$article->created_at->diffForHumans()}} yazıldı.
                </p>
            </div>
            @if (!$loop->last)
            <hr class="my-4" />
            @endif
        @endforeach


        <!-- Pager-->
        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
                →</a></div>
    </div>

    @include('front.widgets.categoryWidget');
@endsection
