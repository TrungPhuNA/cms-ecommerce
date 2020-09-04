<div class="header_top">
    <div class="container header_top-content">
        <ul></ul>
        <ul class="">
            <li>
                <span>{{ __('header_top.label_language') }} </span> <a href="javascript:void(0);"> <i class="flag-icon flag-icon-vi"></i>Vietnamese<i class="lnr lnr-chevron-down"></i></a>
                <!-- Dropdown Start -->
                <ul class="ht-dropdown">
                    <li><a href="{{ route('get.language','vi') }}">Vietnamese</a></li>
                    <li><a href="{{ route('get.language','en') }}">English</a></li>
                </ul>
                <!-- Dropdown End -->
            </li>

{{--            <li class="none">--}}
{{--                <a href="https://hatex.vn/huong-dan/danh-sach.html">Hướng dẫn</a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
