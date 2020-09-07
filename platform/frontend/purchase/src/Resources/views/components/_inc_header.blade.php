<div class="header">
    <div class="container flex align-items-c">
        <div class="logo">
            <a href="/" title="">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
        </div>
        <div class="nav">
            <ul class="flex">
                @foreach(config('user.top_menu') as $item)
                <li class="{{ \Route::currentRouteName() == $item['route'] ? 'active' : '' }}">
                    <a href="{{ route($item['route'])  }}" title="{{ __($item['name']) }}" class="text-align-center">
                        <i class="tooltip_text">{{ __($item['tooltip_text']) }}</i>
                        <span><i class="{{ $item['icon'] }}"></i></span>
                        <span>{{ __($item['name']) }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="language">
            <ul>
                <li>
                    <a href="javascript:void(0);">
                        <i class="flag-icon flag-icon-vi"></i>{{ render_text_language() }}<i class="lnr lnr-chevron-down"></i>
                    </a>
                    <ul class="ht-dropdown">
                        <li><a href="{{ route('get.language','vi') }}">Vietnamese</a></li>
                        <li><a href="{{ route('get.language','en') }}">English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
