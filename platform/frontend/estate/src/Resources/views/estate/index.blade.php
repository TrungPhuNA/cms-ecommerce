@extends('estate::layouts.app_estate')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/user_dashboard.css') }}">
@stop
@section('content')
    <div class="container">
        <div class="box">
            <div class="box-100 pt20">
                <section>
                    <div class="box-title">Danh sách tin đăng <a href="{{ route('get.estate.create') }}" title="Đăng tin">Đăng tin</a></div>
                </section>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/user_dashboard.js') }}"></script>
@stop
