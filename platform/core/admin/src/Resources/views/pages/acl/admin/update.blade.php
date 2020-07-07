@extends('admin::layouts.app_cms_admin')
@section('title_page','Cập nhật Admin')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Cập nhật</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('cms_get.admin.list') }}" title="Trở về" class="btn btn-danger mr-2"><i class="la la-undo"></i> Trở về</a>
                </div>
            </div>
        </div>
        @include('admin::pages.acl.admin.form')
    </div>
@stop
