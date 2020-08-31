<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="index"><img src="{{ asset('images/admin/') }}/brand/logo.png" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="index"><img src="{{ asset('images/admin/') }}/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="index"><img src="{{ asset('images/admin/') }}/brand/favicon.png" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index"><img src="{{ asset('images/admin/') }}/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{ asset('images/admin/') }}/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">{{ get_data_user('admins','name') }}</h4>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">General</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label"><i class="la la-edit"></i> Blogs</span><i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.menu.index') }}">Menu</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.tag.index') }}">Tags</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.article.index') }}">Article</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label"><i class="la la-cart-arrow-down"></i> Ecommerce </span><i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.attribute.index') }}">Attribute</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.category.index') }}">Category</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.product.index') }}">Product</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label"><i class="la la-envelope"></i> Marketing </span><i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.template_email.index') }}">Template</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.send_email.index') }}">Send Email</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label"><i class="la la-sitemap"></i> Admin</span><i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.permission.list') }}">Permission</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.role.list') }}">Role</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.admin.list') }}">Admin</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label"><i class="la la-cog"></i> System</span><i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.information.index') }}">Information</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.page_static.index') }}">Pages</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
