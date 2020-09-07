<div class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="box">
                @for ($i = 1 ; $i <= 5; $i ++)
                    <div class="box-20">
                        <ul class="footer_top-nav text-align-center">
                            <li><a href="">Menu 1</a></li>
                            <li><a href="">Menu 2</a></li>
                            <li><a href="">Menu 3</a></li>
                            <li><a href="">Menu 4</a></li>
                        </ul>
                    </div>
                @endfor
            </div>
        </div>
        <div class="footer_bottom">
            <div class="box">
                <div class="box-20">
                    <a href="">
                        <img src="{{ asset('images/logo_footer.svg') }}" alt="">
                    </a>
                </div>
                <div class="box-60">
                    <p>© 1997-2020. Toàn bộ bản quyền thuộc VnExpress</p>
                    <p>Báo tiếng Việt nhiều người xem nhất. Thuộc Bộ Khoa học Công nghệ</p>
                </div>
                <div class="box-30">
                    <span>Theo dõi <b>TrungPhuNA</b> trên </span>
                    <div class="social">
                        <a href="" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="" title="Youtobe"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
