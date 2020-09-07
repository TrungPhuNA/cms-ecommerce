<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="/"><img src="{{ asset('images/admin/') }}/brand/logo.png" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="/"><img src="{{ asset('images/admin/') }}/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="/"><img src="{{ asset('images/admin/') }}/brand/favicon.png" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="/"><img src="{{ asset('images/admin/') }}/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
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
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label">
                        <i class="la la-edit"></i> {{ trans('adm_sidebar.blog_name') }}</span>
                    <i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.menu.index') }}">{{ trans('adm_sidebar.blog.menu') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.tag.index') }}">{{ trans('adm_sidebar.blog.tag') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.article.index') }}">{{ trans('adm_sidebar.blog.article') }}</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label">
                        <i class="la la-cart-arrow-down"></i> {{ trans('adm_sidebar.ecommerce_name') }}
                    </span>
                    <i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.attribute.index') }}">{{ trans('adm_sidebar.ecommerce.attribute') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.category.index') }}">{{ trans('adm_sidebar.ecommerce.category') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.product.index') }}">{{ trans('adm_sidebar.ecommerce.product') }}</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label">
                        <i class="la la-envelope"></i> {{ trans('adm_sidebar.marketing_name') }} </span>
                    <i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.template_email.index') }}">{{ trans('adm_sidebar.marketing.template') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.send_email.index') }}">{{ trans('adm_sidebar.marketing.send_email') }}</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label">
                        <i class="la la-sitemap"></i> {{ trans('adm_sidebar.admin_name') }}</span>
                    <i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.permission.list') }}">{{ trans('adm_sidebar.admin.permission') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.role.list') }}">{{ trans('adm_sidebar.admin.role') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.admin.list') }}">{{ trans('adm_sidebar.admin.admin') }}</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="index.html#">
                    <span class="side-menu__label">
                        <i class="la la-cog"></i> {{ trans('adm_sidebar.system_name') }}</span>
                    <i class="angle la la-angle-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('cms_get.information.index') }}">{{ trans('adm_sidebar.system.information') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.page_static.index') }}">{{ trans('adm_sidebar.system.page') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.email.index') }}">{{ trans('adm_sidebar.system.setting_email') }}</a></li>
                    <li><a class="slide-item" href="{{ route('cms_get.text_link.index') }}">{{ trans('adm_sidebar.system.text_link') }}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
