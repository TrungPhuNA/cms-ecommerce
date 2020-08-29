<div class="articles">
    @forelse($articles ?? [] as $article)
        <article class="articles-item">
            <div class="logo">
                <a href="{{ link_article($article) }}" title="{{ $article->a_name }}" class="image">
                    <img src="{{ pare_url_file($article->a_avatar) }}"
                         alt="{{ $article->a_name }}">
                </a>
            </div>
            <div class="content">
                <h2 class="title">
                    <a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a>
                </h2>
                <summary>{{ $article->a_description }}</summary>
                @if (isset($article->menu->mn_name))
                <div class="category">
                    <a class="active" href="{{ link_menu($article->menu) }}" title="{{ $article->menu->mn_name }}">{{ $article->menu->mn_name }}</a>
                </div>
                @endif
            </div>
        </article>
        <div style="clear: both"></div>
    @empty
    @endforelse
</div>
