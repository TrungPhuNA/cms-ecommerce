@if (isset($articleDetail->tags) && !$articleDetail->tags->isEmpty())
    <div class="article_tags">
        <a href=""><i class="fa fa-tag"></i></a>
        @foreach($tags = $articleDetail->tags as $tag)
            <a href="{{ link_tag($tag) }}" title="{{ $tag->t_name }}">{{ $tag->t_name }}</a>
        @endforeach
    </div>
@endif
