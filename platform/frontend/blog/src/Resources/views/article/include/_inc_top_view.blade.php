<div class="group-item">
    @foreach($articles ?? [] as $key => $article)
        <div class="item">
            <div class="number">{{ ($key + 1) }}</div>
            <h4 class="title">
                <a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a>
            </h4>
        </div>
    @endforeach
</div>
