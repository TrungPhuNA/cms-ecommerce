@extends('admin::layouts.app_cms_admin')
@section('title_page','Thông tin cá nhân')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Profile</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index</span>
                </div>
            </div>

        </div>
        <div class="row row-sm">
            <div class="col-lg-4">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="pl-0">
                            <div class="main-profile-overview">
                                <div class="main-img-user profile-user"> <img alt="" src="{{ asset('images/admin/faces/6.jpg') }}">
                                    <a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
                                </div>
                                <div class="d-flex justify-content-between mg-b-20">
                                    <div>
                                        <h5 class="main-profile-name">Petey Cruiser</h5>
                                        <p class="main-profile-name-text">Web Designer</p>
                                    </div>
                                </div>

                                <hr class="mg-y-30">
                                <label class="main-content-label tx-13 mg-b-20">Social</label>
                                <div class="main-profile-social-list">
                                    <div class="media">
                                        <div class="media-icon bg-primary-transparent text-primary"> <i class="icon ion-logo-github"></i> </div>
                                        <div class="media-body"> <span>Github</span> <a href="">github.com/spruko</a> </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-success-transparent text-success"> <i class="icon ion-logo-twitter"></i> </div>
                                        <div class="media-body"> <span>Twitter</span> <a href="">twitter.com/spruko.me</a> </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-info-transparent text-info"> <i class="icon ion-logo-linkedin"></i> </div>
                                        <div class="media-body"> <span>Linkedin</span> <a href="">linkedin.com/in/spruko</a> </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-danger-transparent text-danger"> <i class="icon ion-md-link"></i> </div>
                                        <div class="media-body"> <span>My Portfolio</span> <a href="">spruko.com/</a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- main-profile-overview -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row row-sm">
                    <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="counter-status d-flex md-mb-0">
                                    <div class="counter-icon bg-primary-transparent"> <i class="icon-layers text-primary"></i> </div>
                                    <div class="ml-auto">
                                        <h5 class="tx-13">Orders</h5>
                                        <h2 class="mb-0 tx-22 mb-1 mt-1">1,587</h2>
                                        <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="counter-status d-flex md-mb-0">
                                    <div class="counter-icon bg-danger-transparent"> <i class="icon-paypal text-danger"></i> </div>
                                    <div class="ml-auto">
                                        <h5 class="tx-13">Revenue</h5>
                                        <h2 class="mb-0 tx-22 mb-1 mt-1">46,782</h2>
                                        <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="counter-status d-flex md-mb-0">
                                    <div class="counter-icon bg-success-transparent"> <i class="icon-rocket text-success"></i> </div>
                                    <div class="ml-auto">
                                        <h5 class="tx-13">Product sold</h5>
                                        <h2 class="mb-0 tx-22 mb-1 mt-1">1,890</h2>
                                        <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                                <li class="active"> <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">ABOUT ME</span> </a> </li>
                                <li class=""> <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">SETTINGS</span> </a> </li>
                            </ul>
                        </div>
                        <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                            <div class="tab-pane active" id="home">
                                <h4 class="tx-15 text-uppercase mb-3">Giới thiệu</h4>
                                <p class="m-b-5">{{ $admin->about }}</p>
                            </div>
                            <div class="tab-pane" id="settings">
                                <form role="form" action="{{ route('cms_get.admin.profile.update', $admin->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" name="email" value="{{ $admin->email }}" id="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Username">Username</label>
                                        <input type="text" name="username" value="{{ $admin->username }}" id="Username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Username">Phone</label>
                                        <input type="text" name="phone" value="{{ $admin->phone }}" id="Phone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="password" name="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="AboutMe">About Me</label>
                                        <textarea id="AboutMe" name="about" class="form-control">{{ $admin->about }}</textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light w-md js-save-profile"
                                            data-url="{{ route('cms_get.admin.profile.update', $admin->id) }}"
                                            type="submit"><i class="la la-save"></i> Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        @include('admin::pages.system.information.form')--}}
    </div>
@stop

@section('script')
    <script src="{{ asset('admin/js/profile.js') }}"></script>
@stop
