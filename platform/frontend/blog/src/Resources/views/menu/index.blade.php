@extends('pages.layouts.app_frontend')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/menu.css') }}">
@stop
@section('content')
    <div class="menu container content-global">
        <div class="heading-page">
            <h1 class="title">
                <a href="">{{ $menu->mn_name }}</a>
            </h1>
        </div>
        <div class="box">

            <div class="box-70">
                @if (!empty($articlesHot))
                <div class="box">
                    @php
                        $articleHotTop = $articlesHot->splice(0,1) ?? "";
                    @endphp
                    <div class="box-65" style="margin-right: 10px;">
                        @if (isset($articleHotTop) && $article = $articleHotTop[0])
                        <article class="articles-item">
                            <div class="logo">
                                <a href="{{ link_article($article) }}" title="{{ $article->a_name }}" class="image">
                                    <img src="{{ pare_url_file($article->a_avatar) }}" style="max-height: 290px;" alt="{{ $article->a_name }}">
                                </a>
                            </div>
                            <h2 class="title">
                                <a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a>
                            </h2>
                            <summary>{{ $article->a_description }}</summary>
                        </article>
                        @endif
                    </div>
                    <div class="box-35">
                        @forelse($articlesHot as $article)
                            <article class="articles-item">
                                <div class="logo">
                                    <a href="{{ link_article($article) }}" title="{{ $article->a_name }}" class="image">
                                        <img src="{{ pare_url_file($article->a_avatar) }}" style="height: 160px;" alt="{{ $article->a_name }}">
                                    </a>
                                </div>
                                <h3 class="title">
                                    <a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a>
                                </h3>
                            </article>
                            <div style="clear: both"></div>
                        @empty
                        @endforelse
                    </div>
                </div>
                @endif
                @include('pages.components._inc_articles',['articles' => $articles])
            </div>
            <div class="box-30 box-right-banner" style="margin-left: 10px;">
                <div class="top">
                    <img src="{{ asset('images/cio_digital_transformation_resource.jpg') }}" alt="">
                    <div class="title">Theo dòng sự kiện</div>
                    <h3 class="text">LÀM CHA MẸ</h3>
                </div>
                <div class="link">
                    <ul>
                        @for($i = 1 ; $i <= 4 ; $i ++)
                            <li>
                                <a href="" title="Tim thai yếu có nguy hiểm không? - Những điều mẹ cần lưu ý">Tim thai yếu có nguy hiểm không? - Những điều mẹ cần lưu ý</a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/menu.js') }}"></script>
@stop
