@extends('pages.layouts.app_frontend')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/menu.css') }}">
@stop
@section('content')
    <div class="menu container content-global">
        <div class="heading-page">
            <h1 class="title">
                <a href="">{{ $menu->mn_name }}</a>
            </h1>
        </div>
        <div class="box">
            <div class="box-70">
                <div class="box">
                    <div class="box-65" style="margin-right: 10px;">
                        <article class="articles-item">
                            <div class="logo">
                                <a href="" class="image">
                                    <img src="https://media.lamchame.vn/images/2020/08/24/photo1598187206028-159818720625333336770_255x143.jpg" alt="">
                                </a>
                            </div>
                            <h2 class="title">
                                <a href="">Những loại rau kỳ lạ có giá đắt hơn cả thịt cá ở Việt Nam, muốn mua ăn không phải chuyện dễ</a>
                            </h2>
                            <summary>Đôi lúc, sự việc nên nhìn từ nhiều phía, kể cả vấn đề trong tình yêu cũng nên như vậy.</summary>
                        </article>
                    </div>
                    <div class="box-35">
                        @for ($i = 1 ; $i <= 2 ; $i ++)
                            <article class="articles-item">
                                <div class="logo">
                                    <a href="" class="image">
                                        <img src="https://media.lamchame.vn/images/2020/08/24/photo1598198848240-15981988485831407333595_480x270.jpg" alt="">
                                    </a>
                                </div>
                                <h3 class="title">
                                    <a href="">Những loại rau kỳ lạ có giá đắt hơn cả thịt cá ở Việt Nam, muốn mua ăn không phải chuyện dễ</a>
                                </h3>
                            </article>
                            <div style="clear: both"></div>
                        @endfor
                    </div>
                </div>
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
