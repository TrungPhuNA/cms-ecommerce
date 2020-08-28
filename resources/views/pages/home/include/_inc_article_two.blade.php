<section class="box-two">
    <h3 class="title flex align-items-c"><img src="{{ asset('images/3.png') }}" alt=""> <strong>Đang nóng trên diễn đàn</strong></h3>
    <div class="box">
        <div class="box-70">
            <div class="owl-carousel" id="owl-box-two">
                @foreach($articles->chunk(6) as $lists)
                    <div class="item">
                        @foreach($lists as $article)
                            <div class="articles">
                                <h3 class="title"><a href="{{ link_article($article) }}" title="{{ $article->a_name }}">{{ $article->a_name }}</a></h3>
                                <div class="copyright">Bởi {{ $article->auth->name ?? "[N\A]" }}</div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            @include('pages.components._inc_articles',['articles' => $articles ?? []])
        </div>
        <div class="box-30 box-right-banner">
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
</section>
