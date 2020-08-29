@include('pages.components._inc_loading')
@if (!empty($articlesHotMenu))
    <div class="box-50 js-hide-content">
        @php
            $articleTop = $articlesHotMenu->splice(0,1) ?? "";
        @endphp
        <article class="box-left">
            @if ($articleTop = $articleTop[0])
                <div class="logo">
                    <a href="{{ link_article($articleTop) }}" title="{{ $articleTop->a_name }}" class="image">
                        <img src="{{ pare_url_file($articleTop->a_avatar) }}" style="height: 270px;" alt="{{ $articleTop->a_name }}">
                    </a>
                </div>
                <h3 class="title">
                    <a href="{{ link_article($articleTop) }}" title="{{ $articleTop->a_name }}">{{ $articleTop->a_name }}</a>
                </h3>
            @endif
            @php
                $articlesCenter = $articlesHotMenu->splice(1,2) ?? [];
            @endphp
            @if (!empty($articlesCenter))
                <ul class="link">
                    @foreach($articlesCenter as $article)
                        <li><a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </article>
    </div>
    <div class="box-50 js-hide-content">
        @php
            $articles = $articlesHotMenu->splice(2,7) ?? [];
        @endphp
        @if( !empty($articles))
            @foreach($articles as $article)
                <article class="articles-item">
                    <div class="logo">
                        <a href="{{ link_article($article) }}" title="{{ $article->a_name }}" class="image">
                            <img src="{{ pare_url_file($article->a_avatar) }}" alt="{{ $article->a_name }}">
                        </a>
                    </div>
                    <h3 class="title">
                        <a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a>
                    </h3>
                </article>
                <div style="clear: both"></div>
            @endforeach
        @endif
    </div>
@endif
