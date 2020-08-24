<div class="menus">
    <div class="container">
        <a href="/" class="home-link" title=""><span class="fa fa-home"></span></a>
        <ul>
            @foreach($menusGlobal ?? [] as $menu)
            <li>
                <a href="{{ link_menu($menu) }}" title="{{ $menu->mn_name }}">{{ $menu->mn_name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
