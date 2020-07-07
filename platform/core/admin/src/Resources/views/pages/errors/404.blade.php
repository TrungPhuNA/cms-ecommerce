@extends('admin::layouts.app_cms_admin')
@section('content')
    <div class="main-error-wrapper  page page-h ">
        <img src="{{ asset('images/admin/media/404.png') }}" class="error-page" alt="error">
        <h2>Oopps. The page you were looking for doesn't exist.</h2>
        <h6>You may have mistyped the address or the page may have moved.</h6>
        <a class="btn btn-outline-danger" href="{{ route('cms_get.admin') }}">Back to Home</a>
    </div>
@stop
