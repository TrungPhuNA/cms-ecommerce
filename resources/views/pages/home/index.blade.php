@extends('pages.layouts.app_frontend')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
@stop
@section('content')
    <div class="home container content-global">
        @include('pages.home.include._inc_article_one')
        @include('pages.home.include._inc_article_two')
        @include('pages.home.include._inc_article_three')
        @include('pages.home.include._inc_article_four')
    </div>
@stop

@section('script')
    <script src="{{ mix('js/home.js') }}"></script>
@stop