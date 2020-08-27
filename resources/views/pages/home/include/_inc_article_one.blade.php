<section class="box-article-one flex">
    @foreach($articles ?? [] as $article)
        <div class="item">
            <a href="{{ link_article($article) }}" class="image" title="{{ $article->a_name }}">
                <img src="{{ pare_url_file($article->a_avatar) }}" alt="{{ $article->a_name }}">
            </a>
            <h3 class="title">
                <a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a>
            </h3>
        </div>
    @endforeach
</section>
