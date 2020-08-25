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
                    <span class="copyright-name">phuong quyen</span>
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
    </div>
@stop

@section('script')
    <script src="{{ mix('js/menu.js') }}"></script>
@stop
