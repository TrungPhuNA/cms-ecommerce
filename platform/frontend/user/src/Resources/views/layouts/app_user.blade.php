<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    {!! isset($metaSeo) ? $metaSeo->renderMetaSeo() : '' !!}
    <title>Theme - TrungPhuNA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('style')
    @if(session('toastr'))
        <script>
            var TYPE_MESSAGE = "{{session('toastr.type')}}";
            var MESSAGE = "{{session('toastr.message')}}";
        </script>
    @endif
</head>
<body>
    @include('user::components._inc_header')
    @include('user::components._inc_popup_password')
    @yield('content')
    <div class="" style="clear: both"></div>
    @yield('script')
    </body>
</html>
