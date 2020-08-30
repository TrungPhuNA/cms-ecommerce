<section class="box-four">
    <div class="box">
        @if (!empty($articlesByMenuHotTwo))
        <div class="box-70">
            <div class="box">
                @foreach($articlesByMenuHotTwo as $menu => $articles)
                    @php
                        $menu = json_decode($menu);
                    @endphp
                    <div class="box-50" style="margin-right: 10px;">
                    <div class="heading-block">
                        <h2 class="title"><a href="{{ link_menu($menu) }}" title="{{ $menu->mn_name }}">{{ $menu->mn_name }}</a></h2>
                    </div>
                    <article>
                        @php
                            $articleTop = $articles->splice(0,1) ?? "";
                        @endphp
                        @if (isset($articleTop[0]) && $article = $articleTop[0])
                            <div class="logo">
                                <a href="{{ link_article($article) }}" title="{{ $article->a_name }}" class="image">
                                    <img src="{{ pare_url_file($article->a_avatar) }}" style="height: 230px" alt="{{ $article->a_name }}">
                                </a>
                            </div>
                            <h3 class="title">
                                <a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a>
                            </h3>
                        @endif
                        @php
                            $articlesCenter = $articles->splice(1) ?? [];
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
                @endforeach
            </div>
        </div>
        @endif
        <div class="box-30"></div>

    </div>
</section>
