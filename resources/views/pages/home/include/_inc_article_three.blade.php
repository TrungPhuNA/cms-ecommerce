<section class="box-three">
    <div class="box">
        <div class="box-70">
            @if ($menusHot)
                <div class="nav">
                    <h2 class="title"><a href="{{ link_menu($menusHot) }}"
                                         title="{{ $menusHot->mn_name }}">{{ $menusHot->mn_name }}</a></h2>
                    @if (isset($menusHot->children) && !$menusHot->children->isEmpty())
                        <ul class="list">
                            @foreach($menusHot->children as $item)
                                <li><a href="" class="js-tab-menu-home" data-slug="{{ $item->mn_slug }}"
                                       title="{{ $item->mn_name }}">{{ $item->mn_name }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endif
            <div class="box" id="js-box-content-article">
                @include('pages.home.include._inc_article_three_child',['articlesHotMenu' => $articlesHotMenu])
            </div>
        </div>
        <div class="box-30"></div>
    </div>
</section>

<script>
    var URL_NEXT_TAB = '{{ route('ajax_post.next_tab') }}'
</script>
