@extends('front.layouts.master')

@section('title')
{{$article->title}}
@endsection
@section('article_title')
{{$article->title}}
@endsection
@section('article_bg')
{{$article->image}}
@endsection

@section('okunma_sayisi')
    {{$article->hit}}
@endsection

@section('content')
<div class="col-lg-9 ">
    <p>{!!$article->content!!}</p>
    <p>Okunma Sayısı: @yield("okunma_sayisi", "")</p>
</div>

@include('front.widgets.categoryWidget')
@endsection