<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Theme - TrungPhuNA</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        @yield('style')
    </head>
    <body>
        @include('pages.components._inc_header_top')
        @include('pages.components._inc_header')
        @include('pages.components._inc_menu')
        <div id="main">
            @yield('content')
        </div>
        @include('pages.components._inc_box_email')
        @include('pages.components._inc_footer')
        <script>
            var URL_AJAX_EMAIL = '{{ route('ajax_post.email') }}'
        </script>
        @yield('script')
    </body>
</html>
