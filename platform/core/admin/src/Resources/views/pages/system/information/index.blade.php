@extends('admin::layouts.app_cms_admin')
@section('title_page','Thông tin website')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Information</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index</span>
                </div>
            </div>

        </div>
        @include('admin::pages.system.information.form')
    </div>
@stop
