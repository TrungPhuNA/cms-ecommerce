<div class="header_top">
    <div class="container header_top-content">
        <ul></ul>
        <ul class="">
            @if (get_data_user('web'))
                <li><a href="{{ route('get.logout') }}">Xin Chào : {{ get_data_user('web','name') }}</a></li>
            @else
                <li><a href="{{ route('get.register') }}" title="Đăng ký">{{ __('header_top.register') }} </a></li>
            @endif
            <li>
                <span>{{ __('header_top.label_language') }} </span> <a href="javascript:void(0);">
                    <i class="flag-icon flag-icon-vi"></i>{{ render_text_language() }}<i class="lnr lnr-chevron-down"></i>
                </a>
                <ul class="ht-dropdown">
                    <li><a href="{{ route('get.language','vi') }}">Vietnamese</a></li>
                    <li><a href="{{ route('get.language','en') }}">English</a></li>
                </ul>
            </li>

{{--            <li class="none">--}}
{{--                <a href="https://hatex.vn/huong-dan/danh-sach.html">Hướng dẫn</a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
