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
            <div class="articles">
                @for ($i = 1 ; $i <= 10 ; $i ++)
                    <article class="articles-item">
                        <div class="logo">
                            <a href="" class="image">
                                <img src="https://media.lamchame.vn/images/2020/08/24/photo1598187206028-159818720625333336770_255x143.jpg" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <h2 class="title">
                                <a href="">Những loại rau kỳ lạ có giá đắt hơn cả thịt cá ở Việt Nam, muốn mua ăn không phải chuyện dễ</a>
                            </h2>
                            <summary>Có thể bạn không tin nhưng “mấy cọng rau” dưới đây đôi khi còn đắt hơn cả thịt cá chúng ta hay ăn luôn đấy!</summary>
                            <div class="category">
                                <a class="active" href="" title="">Đời sống</a>
                            </div>
                        </div>
                    </article>
                    <div style="clear: both"></div>
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
