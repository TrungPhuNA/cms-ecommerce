@extends('pages.layouts.app_frontend')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
@stop
@section('content')
    <div class="home container content-global">
        <section class="box-article-one flex">
            @for ($i = 1 ; $i <= 3 ; $i ++)
                <div class="item">
                    <a href="" class="image">
                        <img src="https://media.lamchame.vn/images/2020/08/23/batchbcc2c9581e45fdacfa2c57a58b577d58-1598155137624584711550_480x270.jpg" alt="">
                    </a>
                    <h3 class="title">
                        <a href="">Niềm hạnh phúc của người bố khi con trai được Công an giải cứu ở Bắc Ninh: "Tôi như sống lại một lần nữa"</a>
                    </h3>
                </div>
            @endfor
        </section>
        <section class="box-two">
            <h3 class="title flex align-items-c"><img src="{{ asset('images/3.png') }}" alt=""> <strong>Đang nóng trên diễn đàn</strong></h3>
            <div class="box">
                <div class="box-70">
                    <div class="owl-carousel" id="owl-box-two">
                        @for ($j = 1 ; $j <= 3 ; $j ++)
                            <div class="item">
                                @for($i = 1; $i <= 6; $i ++)
                                    <div class="articles articles-{{ $i }}">
                                        <h3 class="title"><a href="">Kinh nghiệm:  Trứng Hấp Nấm Rơm Phiên Bản Ngon Ngon Luôn</a></h3>
                                        <div class="copyright">Bởi venhaancom</div>
                                    </div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="box-30">
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
    </div>
@stop

@section('script')
    <script src="{{ mix('js/home.js') }}"></script>
@stop
