@extends('pages.layouts.app_frontend')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/menu.css') }}">
@stop
@section('content')
    <div class="menu container content-global">
        <div class="heading-page">
            <h1 class="title">
                <a href="" title="{{ $tag->t_name }}">{{ $tag->t_name }}</a>
            </h1>
        </div>
        <div class="box">

            <div class="box-70">
                @include('pages.components._inc_articles',['articles' => $articles])
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
