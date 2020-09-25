@extends('user::layouts.app_user')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/user_bank.css') }}">
@stop
@section('content')
    <div class="container">
        <div class="box">
            <div class="box-20 pt20 mr20">
                @include('user::components._inc_avatar')
            </div>
            <div class="box-80 pt20">
                <section>
                    <div class="box-title">{{ __('user.payment_card.title') }}</div>
                    @include('user::payment_card.form')
                </section>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/user_bank.js') }}"></script>
@stop
