<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9"/>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
          content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
    <!-- Title -->
    <title> @yield('title_page') | CMS </title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/admin/') }}brand/favicon.png" type="image/x-icon"/>

    <!--  Owl-carousel css-->
{{--    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />--}}
<!-- Maps css -->

    @if(session('toastr'))
        <script>
            var TYPE_MESSAGE = "{{session('toastr.type')}}";
            var MESSAGE = "{{session('toastr.message')}}";
        </script>
    @endif
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('admin/css/global.css') }}" rel="stylesheet">
</head>
<body class="main-body app sidebar-mini">
<!-- Start Switcher -->
<div class="switcher-wrapper ">
    <div class="demo_changer">
        <div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin  text_primary"></i></div>
        <div class="form_holder sidebar-right1">
            <div class="row">
                <div class="swichermainleft border-bottom  text-center">
                    <div class="p-3">
                        <a href="https://www.spruko.com/demo/valex/" class="btn btn-primary btn-block mt-0">View
                            Demo</a>
                        <a href="index.html#" class="btn btn-secondary btn-block">Buy Now</a>
                        <a href="https://themeforest.net/user/sprukosoft/portfolio" class="btn btn-success btn-block">Our
                            Portfolio</a>
                    </div>
                </div>
                <div class="predefined_styles">
                    <div class="swichermainleft">
                        <h4>Navigation Style</h4>
                        <div class="pl-3 pr-3">
                            <a href="https://laravel.spruko.com/valex/horizontal-light-ltr/index"
                               class="btn btn-danger btn-block mt-0">Horizontal</a>
                            <a href="index" class="btn btn-info btn-block">Left-menu</a>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Skin Modes</h4>
                        <div class="pl-0 pr-0">
                            <a class="wscolorcode blackborder nav-hor navstyle1" href="index">
                                Light-theme
                            </a>
                            <a class="wscolorcode blackborder nav-hor navstyle1"
                               href="https://laravel.spruko.com/valex/leftmenu-dark-ltr/index">
                                Dark-theme
                            </a>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Skin Modes</h4>
                        <div class="switch_section">
                            <div class="switch-toggle d-flex">
                                <span class="mr-auto">Default Body</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch" id="myonoffswitch7"
                                                                 class="onoffswitch2-checkbox" checked>
                                    <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle d-flex">
                                <span class="mr-auto">Body Style1</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch" id="myonoffswitch6"
                                                                 class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Leftmenu Bg-Image</h4>
                        <div class="skin-body light-pattern">
                            <button type="button" id="leftmenuimage1" class="bg1 wscolorcode1 blackborder"></button>
                            <button type="button" id="leftmenuimage2" class="bg2 wscolorcode1 blackborder"></button>
                            <button type="button" id="leftmenuimage3" class="bg3 wscolorcode1 blackborder"></button>
                            <button type="button" id="leftmenuimage4" class="bg4 wscolorcode1 blackborder"></button>
                            <button type="button" id="leftmenuimage5" class="bg5 wscolorcode1 blackborder"></button>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Leftmenu Styles</h4>
                        <div class="switch_section">
                            <div class="switch-toggle d-flex">
                                <span class="mr-auto">Leftmenu Color</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch10"
                                                                 class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle horizontal-Dark-switcher d-flex">
                                <span class="mr-auto">Leftmenu Dark</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch11"
                                                                 class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle horizontal-light-switcher d-flex">
                                <span class="mr-auto">Leftmenu Light</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch9"
                                                                 class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle d-flex">
                                <span class="mr-auto">Leftmenu Gradient Color</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch12"
                                                                 class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                            <div class="switch-toggle d-flex">
                                <span class="mr-auto">Reset Leftmenu Styles</span>
                                <div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch13"
                                                                 class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->
<!-- Loader -->
<div id="global-loader">
    <img src="{{ asset('images/admin/') }}/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->
<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
@include('admin::components.adm-sidebar')
<!-- main-sidebar -->
<!-- main-content -->
<div class="main-content app-content">
    <!-- main-header -->
    <div class="main-header sticky side-header nav nav-item">
        <div class="container-fluid">
            <div class="main-header-left ">
                <div class="responsive-logo">
                    <a href="index"><img src="{{ asset('images/admin/') }}/brand/logo.png" class="logo-1"
                                         alt="logo"></a>
                    <a href="index"><img src="{{ asset('images/admin/') }}/brand/logo-white.png" class="dark-logo-1"
                                         alt="logo"></a>
                    <a href="index"><img src="{{ asset('images/admin/') }}/brand/favicon.png" class="logo-2" alt="logo"></a>
                    <a href="index"><img src="{{ asset('images/admin/') }}/brand/favicon.png" class="dark-logo-2"
                                         alt="logo"></a>
                </div>
                <div class="app-sidebar__toggle" data-toggle="sidebar">
                    <a class="open-toggle" href="index.html#"><i class="header-icon fe fe-align-left"></i></a>
                    <a class="close-toggle" href="index.html#"><i class="header-icons fe fe-x"></i></a>
                </div>
                <div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
                    <input class="form-control" placeholder="Search for anything..." type="search">
                    <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
                </div>
            </div>
            <div class="main-header-right">
                <ul class="nav">
                    <li class="">
                        <div class="dropdown  nav-itemd-none d-md-flex">
                            <a href="/" class="d-flex  nav-item nav-link pr-0 country-flag1"
                               data-toggle="dropdown" aria-expanded="false">
                                <span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img
                                        src="{{ asset('images/admin/') }}/flags/us_flag.jpg" alt="img"></span>
                                <div class="my-auto">
                                    <strong class="mr-2 ml-2 my-auto">English</strong>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
                                <a href="index.html#" class="dropdown-item d-flex ">
                                    <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('images/admin') }}/flags/french_flag.jpg" alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">French</span>
                                    </div>
                                </a>
                                <a href="index.html#" class="dropdown-item d-flex">
                                    <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('images/admin') }}/flags/germany_flag.jpg" alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">Germany</span>
                                    </div>
                                </a>
                                <a href="index.html#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('images/admin') }}/flags/italy_flag.jpg" alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">Italy</span>
                                    </div>
                                </a>
                                <a href="index.html#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('images/admin') }}/flags/russia_flag.jpg" alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">Russia</span>
                                    </div>
                                </a>
                                <a href="index.html#" class="dropdown-item d-flex">
                                    <span class="avatar  mr-3 align-self-center bg-transparent"><img
                                            src="{{ asset('images/admin') }}/flags/spain_flag.jpg" alt="img"></span>
                                    <div class="d-flex">
                                        <span class="mt-2">spain</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="nav nav-item  navbar-nav-right ml-auto">
                    <div class="nav-link" id="bs-example-navbar-collapse-1">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                            <button type="reset" class="btn btn-default">
                                            <i class="fas fa-times"></i>
                                            </button>
                                            <button type="submit" class="btn btn-default nav-link resp-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-search">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                </svg>
                                            </button>
                                        </span>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown nav-item main-header-message ">
                        <a class="new nav-link" href="index.html#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-mail">
                                <path
                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span class=" pulse-danger"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="menu-header-content bg-primary text-left">
                                <div class="d-flex">
                                    <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Messages</h6>
                                    <span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
                                </div>
                                <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4
                                    unread messages</p>
                            </div>
                            <div class="main-message-list chat-scroll">
                                <a href="index.html#" class="p-3 d-flex border-bottom">
                                    <div class="  drop-img  cover-image  "
                                         data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/3.jpg">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Petey Cruiser</h5>
                                        </div>
                                        <p class="mb-0 desc">I'm sorry but i'm not sure how to help you with
                                            that......</p>
                                        <p class="time mb-0 text-left float-left ml-2 mt-2">Mar 15 3:55 PM</p>
                                    </div>
                                </a>
                                <a href="index.html#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                         data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/2.jpg">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Jimmy Changa</h5>
                                        </div>
                                        <p class="mb-0 desc">All set ! Now, time to get to you now......</p>
                                        <p class="time mb-0 text-left float-left ml-2 mt-2">Mar 06 01:12 AM</p>
                                    </div>
                                </a>
                                <a href="index.html#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                         data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/9.jpg">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Graham Cracker</h5>
                                        </div>
                                        <p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
                                        <p class="time mb-0 text-left float-left ml-2 mt-2">Feb 25 10:35 AM</p>
                                    </div>
                                </a>
                                <a href="index.html#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                         data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/12.jpg">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Donatella Nobatti</h5>
                                        </div>
                                        <p class="mb-0 desc">Here are some products ...</p>
                                        <p class="time mb-0 text-left float-left ml-2 mt-2">Feb 12 05:12 PM</p>
                                    </div>
                                </a>
                                <a href="index.html#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                         data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/5.jpg">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Anne Fibbiyon</h5>
                                        </div>
                                        <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                        <p class="time mb-0 text-left float-left ml-2 mt-2">Jan 29 03:16 PM</p>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center dropdown-footer">
                                <a href="text-center">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown nav-item main-header-notification">
                        <a class="new nav-link" href="index.html#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class=" pulse"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="menu-header-content bg-primary text-left">
                                <div class="d-flex">
                                    <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">
                                        Notifications</h6>
                                    <span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
                                </div>
                                <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4
                                    unread Notifications</p>
                            </div>
                            <div class="main-notification-list Notification-scroll">
                                <a class="d-flex p-3 border-bottom" href="index.html#">
                                    <div class="notifyimg bg-pink">
                                        <i class="la la-file-alt text-white"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New files available</h5>
                                        <div class="notification-subtext">10 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3" href="index.html#">
                                    <div class="notifyimg bg-purple">
                                        <i class="la la-gem text-white"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">Updates Available</h5>
                                        <div class="notification-subtext">2 days ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="index.html#">
                                    <div class="notifyimg bg-success">
                                        <i class="la la-shopping-basket text-white"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New Order Received</h5>
                                        <div class="notification-subtext">1 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="index.html#">
                                    <div class="notifyimg bg-warning">
                                        <i class="la la-envelope-open text-white"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New review received</h5>
                                        <div class="notification-subtext">1 day ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="index.html#">
                                    <div class="notifyimg bg-danger">
                                        <i class="la la-user-check text-white"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">22 verified registrations</h5>
                                        <div class="notification-subtext">2 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="index.html#">
                                    <div class="notifyimg bg-primary">
                                        <i class="la la-check-circle text-white"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">Project has been approved</h5>
                                        <div class="notification-subtext">4 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="index.html">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item full-screen fullscreen-button">
                        <a class="new nav-link full-screen-link" href="index.html#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-maximize">
                                <path
                                    d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu nav nav-item nav-link">
                        <a class="profile-user d-flex" href="index.html"><img alt=""
                                                                              src="{{ asset('images/admin') }}/faces/6.jpg"></a>
                        <div class="dropdown-menu">
                            <div class="main-header-profile bg-primary p-3">
                                <div class="d-flex wd-100p">
                                    <div class="main-img-user"><img alt="" src="{{ asset('images/admin') }}/faces/6.jpg"
                                                                    class=""></div>
                                    <div class="ml-3 my-auto">
                                        <h6>Petey Cruiser</h6>
                                        <span>Premium Member</span>
                                    </div>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{ route('cms_get.admin.profile') }}"><i
                                    class="bx bx-user-circle"></i>Profile</a>
                            {{--                            <a class="dropdown-item" href="index.html"><i class="bx bx-cog"></i> Edit Profile</a>--}}
                            {{--                            <a class="dropdown-item" href="index.html"><i class="bx bxs-inbox"></i>Inbox</a>--}}
                            {{--                            <a class="dropdown-item" href="index.html"><i class="bx bx-envelope"></i>Messages</a>--}}
                            {{--                            <a class="dropdown-item" href="index.html"><i class="bx bx-slider-alt"></i> Account Settings</a>--}}
                            <a class="dropdown-item" href="{{ route('cms_get.logout') }}" title="Đăng xuất"><i
                                    class="bx bx-log-out"></i> Sign Out</a>
                        </div>
                    </div>
                    <div class="dropdown main-header-message right-toggle">
                        <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-header -->
    <!-- container -->
@yield('content')
<!-- /Container -->
</div>
<!-- /main-content -->
<!-- Sidebar-right-->
<div class="sidebar sidebar-right sidebar-animate">
    <div class="panel panel-primary card mb-0 box-shadow">
        <div class="tab-menu-heading border-0 p-3">
            <div class="card-title mb-0">Notifications</div>
            <div class="card-options ml-auto">
                <a href="index.html#" class="sidebar-remove"><i class="fe fe-x"></i></a>
            </div>
        </div>
        <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <div class="tabs-menu ">
                <!-- Tabs -->
                <ul class="nav panel-tabs">
                    <li class=""><a href="index.html#side1" class="active" data-toggle="tab"><i
                                class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
                    <li><a href="index.html#side2" data-toggle="tab"><i
                                class="ion ion-md-notifications tx-18  mr-2"></i> Notifications</a></li>
                    <li><a href="index.html#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i>
                            Friends</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active " id="side1">
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-primary brround avatar-md">CH</span>
                        </div>
                        <a class="wrapper w-100 ml-3" href="index.html#">
                            <p class="mb-0 d-flex ">
                                <b>New Websites is Created</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">30 mins ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-danger brround avatar-md">N</span>
                        </div>
                        <a class="wrapper w-100 ml-3" href="index.html#">
                            <p class="mb-0 d-flex ">
                                <b>Prepare For the Next Project</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">2 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-info brround avatar-md">S</span>
                        </div>
                        <a class="wrapper w-100 ml-3" href="index.html#">
                            <p class="mb-0 d-flex ">
                                <b>Decide the live Discussion</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">3 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-warning brround avatar-md">K</span>
                        </div>
                        <a class="wrapper w-100 ml-3" href="index.html#">
                            <p class="mb-0 d-flex ">
                                <b>Meeting at 3:00 pm</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">4 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-success brround avatar-md">R</span>
                        </div>
                        <a class="wrapper w-100 ml-3" href="index.html#">
                            <p class="mb-0 d-flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">1 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-pink brround avatar-md">MS</span>
                        </div>
                        <a class="wrapper w-100 ml-3" href="index.html#">
                            <p class="mb-0 d-flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">1 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-purple brround avatar-md">L</span>
                        </div>
                        <a class="wrapper w-100 ml-3" href="index.html#">
                            <p class="mb-0 d-flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">45 mintues ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center p-3">
                        <div class="">
                            <span class="avatar bg-blue brround avatar-md">U</span>
                        </div>
                        <a class="wrapper w-100 ml-3" href="index.html#">
                            <p class="mb-0 d-flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">2 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane  " id="side2">
                    <div class="list-group list-group-flush ">
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-3">
                                <span class="avatar avatar-lg brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/12.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div>
                                <strong>Madeleine</strong> Hey! there I' am available....
                                <div class="small text-muted">
                                    3 hours ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-3">
                                <span class="avatar avatar-lg brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/1.jpg"></span>
                            </div>
                            <div>
                                <strong>Anthony</strong> New product Launching...
                                <div class="small text-muted">
                                    5 hour ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-3">
                                <span class="avatar avatar-lg brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/2.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div>
                                <strong>Olivia</strong> New Schedule Realease......
                                <div class="small text-muted">
                                    45 mintues ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-3">
                                <span class="avatar avatar-lg brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/8.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div>
                                <strong>Madeleine</strong> Hey! there I' am available....
                                <div class="small text-muted">
                                    3 hours ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-3">
                                <span class="avatar avatar-lg brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/11.jpg"></span>
                            </div>
                            <div>
                                <strong>Anthony</strong> New product Launching...
                                <div class="small text-muted">
                                    5 hour ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-3">
                                <span class="avatar avatar-lg brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/6.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div>
                                <strong>Olivia</strong> New Schedule Realease......
                                <div class="small text-muted">
                                    45 mintues ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-3">
                                <span class="avatar avatar-lg brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/9.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div>
                                <strong>Olivia</strong> Hey! there I' am available....
                                <div class="small text-muted">
                                    12 mintues ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  " id="side3">
                    <div class="list-group list-group-flush ">
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/9.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle
                                    Belt
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/11.jpg"></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda
                                    Carasco
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/10.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina
                                    Bernier
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/2.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula
                                    Mclaughin
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/13.jpg"></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro
                                    Heide
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/12.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle
                                    Belt
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/4.jpg"></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda
                                    Carasco
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/7.jpg"></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina
                                    Bernier
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/2.jpg"></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula
                                    Mclaughin
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/14.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro
                                    Heide
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/11.jpg"></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda
                                    Carasco
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/9.jpg"></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina
                                    Bernier
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/15.jpg"><span
                                        class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula
                                    Mclaughin
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="mr-2">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="https://laravel.spruko.com/valex/leftmenu-light-ltr/{{ asset('images/admin') }}/faces/4.jpg"></span>
                            </div>
                            <div class="">
                                <div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro
                                    Heide
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="index.html#" class="btn btn-sm btn-light" data-toggle="modal"
                                   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Sidebar-right-->
<!-- Message Modal -->
<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-right chatbox" role="document">
        <div class="modal-content chat border-0">
            <div class="card overflow-hidden mb-0 border-0">
                <!-- action-header -->
                <div class="action-header clearfix">
                    <div class="float-left hidden-xs d-flex ml-2">
                        <div class="img_cont mr-3">
                            <img src="{{ asset('images/admin') }}/faces/6.jpg" class="rounded-circle user_img"
                                 alt="img">
                        </div>
                        <div class="align-items-center mt-2">
                            <h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
                            <span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
                        </div>
                    </div>
                    <ul class="ah-actions actions align-items-center">
                        <li class="call-icon">
                            <a href="index.html" class="d-done d-md-block phone-button" data-toggle="modal"
                               data-target="#audiomodal">
                                <i class="si si-phone"></i>
                            </a>
                        </li>
                        <li class="video-icon">
                            <a href="index.html" class="d-done d-md-block phone-button" data-toggle="modal"
                               data-target="#videomodal">
                                <i class="si si-camrecorder"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="index.html" data-toggle="dropdown" aria-expanded="true">
                                <i class="si si-options-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><i class="fa fa-user-circle"></i> View profile</li>
                                <li><i class="fa fa-users"></i>Add friends</li>
                                <li><i class="fa fa-plus"></i> Add to group</li>
                                <li><i class="fa fa-ban"></i> Block</li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.html" class="" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="si si-close text-white"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- action-header end -->
                <!-- msg_card_body -->
                <div class="card-body msg_card_body">
                    <div class="chat-box-single-line">
                        <abbr class="timestamp">February 1st, 2019</abbr>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/6.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Hi, how are you Jenna Side?
                            <span class="msg_time">8:40 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <div class="msg_cotainer_send">
                            Hi Connor Paige i am good tnx how about you?
                            <span class="msg_time_send">8:55 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/9.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/6.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                        <div class="msg_cotainer">
                            I am good too, thank you for your chat template
                            <span class="msg_time">9:00 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <div class="msg_cotainer_send">
                            You welcome Connor Paige
                            <span class="msg_time_send">9:05 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/9.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/6.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/9.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/6.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/9.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/6.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/9.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="img_cont_msg">
                            <img src="{{ asset('images/admin') }}/faces/6.jpg" class="rounded-circle user_img_msg"
                                 alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Okay Bye, text you later..
                            <span class="msg_time">9:12 AM, Today</span>
                        </div>
                    </div>
                </div>
                <!-- msg_card_body end -->
                <!-- card-footer -->
                <div class="card-footer">
                    <div class="msb-reply d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Typing....">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary ">
                                    <i class="far fa-paper-plane" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card-footer end -->
            </div>
        </div>
    </div>
</div>
<!--Video Modal -->
<div id="videomodal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark border-0 text-white">
            <div class="modal-body mx-auto text-center p-7">
                <h5>Valex Video call</h5>
                <img src="{{ asset('images/admin') }}/faces/6.jpg"
                     class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                <h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
                <h6>Calling...</h6>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0 mr-3" href="index.html#">
                                <i class="fas fa-video-slash"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="index.html#"
                               data-dismiss="modal" aria-label="Close">
                                <i class="fas fa-phone bg-danger text-white"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0 mr-3" href="index.html#">
                                <i class="fas fa-microphone-slash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal-body -->
        </div>
    </div>
    <!-- modal-dialog -->
</div>
<!-- modal -->
<!-- Audio Modal -->
<div id="audiomodal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">
            <div class="modal-body mx-auto text-center p-7">
                <h5>Valex Voice call</h5>
                <img src="{{ asset('images/admin/') }}/faces/6.jpg"
                     class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                <h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
                <h6>Calling...</h6>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0 mr-3" href="index.html#">
                                <i class="fas fa-volume-up bg-light"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="index.html#"
                               data-dismiss="modal" aria-label="Close">
                                <i class="fas fa-phone text-white bg-success"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape  rounded-circle mb-0 mr-3" href="index.html#">
                                <i class="fas fa-microphone-slash bg-light"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal-body -->
        </div>
    </div>
    <!-- modal-dialog -->
</div>
<!-- modal -->
<!-- Footer opened -->
<div class="main-footer ht-40">
    <div class="container-fluid pd-t-0-f ht-100p">
        <span>Copyright © 2020 <a href="index.html#">Valex</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
    </div>
</div>
<!-- Footer closed -->                <!-- Back-to-top -->
<a href="index.html#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
<!-- JQuery min js -->
{{--<script src="assets/plugins/jquery/jquery.min.js"></script>--}}
<!-- Bootstrap Bundle js -->


<script src="{{ asset('admin/js/global.js') }}"></script>
@yield('script')
</body>
</html>
