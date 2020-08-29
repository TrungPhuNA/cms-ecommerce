@extends('pages.layouts.app_frontend')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/article_detail.css') }}">
@stop
@section('content')
    <div class="menu container content-global">
        <div class="heading-page">
            <h2 class="title">
                <a href="">{{ $articleDetail->menu->mn_name ?? "Chưa cập nhật" }}</a>
            </h2>
        </div>
        <div class="box">
            <div class="box-70">
                <h1><strong>{{ $articleDetail->a_name }}</strong></h1>
                <div class="copyright-date">
                    <span class="copyright-name">{{ $articleDetail->auth->name ?? "[N\A]" }}</span>
                    <span class="fa fa-clock date">{{ $articleDetail->created_at->format('H:s d/m/y') }}</span>
                </div>
                <div class="article_content">{!! $articleDetail->a_content !!}</div>
                @include('pages.components._inc_articles')
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
        <section style="margin-top: 20px;">
            <div class="articles-box">
                @for ($i = 1 ; $i <= 8 ; $i ++)
                    <div class="item">
                        <a href="" class="image">
                            <img src="https://media.lamchame.vn/images/2020/08/25/photo1598322274444-15983222746101635804100_255x143.jpg" alt="">
                        </a>
                        <h3 class="title">
                            <a href="">Bắt gặp HS lớp 5 hôn nhau, phụ huynh hóa đá, con bảo 'muốn ngửi mùi cơ thể của nhau'!?</a>
                        </h3>
                    </div>
                @endfor
                <div style="clear: both"></div>
            </div>
        </section>
        <section style="margin-top: 20px;">
            <div class="box">
                <div class="box-70" style="margin-right: 15px">
                    <div class="heading-block">
                        <h2 class="title"><a href="">Ăn Chơi</a></h2>
                    </div>
                    @include('pages.components._inc_articles',['articles' => $articlesNews])
                </div>
                <div class="box-30">
                    <div class="read-much">
                        <h3 class="title">ĐỌC NHIỀU</h3>
                        @include('blog::article.include._inc_top_view',['articles' => $articlesViews])
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/menu.js') }}"></script>
@stop
