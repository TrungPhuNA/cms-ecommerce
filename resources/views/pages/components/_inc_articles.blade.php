<div class="articles">
    @forelse($articles ?? [] as $article)
        <article class="articles-item">
            <div class="logo">
                <a href="{{ link_article($article) }}" title="{{ $article->a_name }}" class="image">
                    <img src="https://media.lamchame.vn/images/2020/08/24/photo1598187206028-159818720625333336770_255x143.jpg"
                         alt="{{ $article->a_name }}">
                </a>
            </div>
            <div class="content">
                <h2 class="title">
                    <a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a>
                </h2>
                <summary>{{ $article->a_description }}</summary>
                <div class="category">
                    <a class="active" href="" title="">Đời sống</a>
                </div>
            </div>
        </article>
        <div style="clear: both"></div>
    @empty
    @endforelse
</div>
