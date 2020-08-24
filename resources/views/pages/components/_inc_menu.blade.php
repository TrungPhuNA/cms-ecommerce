<div class="menus">
    <div class="container">
        <a href="/" class="home-link" title=""><span class="fa fa-home"></span></a>
        <ul>
            @foreach(config('seed_data.menus') as $menu)
            <li><a href="">{{ $menu['name'] }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
