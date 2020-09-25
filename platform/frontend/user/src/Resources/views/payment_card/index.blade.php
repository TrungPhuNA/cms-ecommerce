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
                    <div class="box-title">{{ __('user.payment_card.title') }} <a href="{{ route('get.payment_card.create') }}">Thêm mới</a></div>
                    <div class="lists">
                        @forelse($cardsUser as $item)
                            <div class="item item-3">
                                <div class="item-logo">
                                    <a href="">
                                        <img src="{{ asset('images/card/acb.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="item-name-card"><b>{{ $item->bank->b_name ?? "[N\A]" }}</b></div>
                                <div class="item-number">
                                    Số tài khoản: <b>{{ $item->cu_account_number }}</b>
                                </div>
                                <div class="item-account">
                                    Tên tài khoản: <b>{{ $item->cu_account_holder }}</b>
                                </div>
                                <div class="item-branch">
                                    Chi nhánh: <b>{{ $item->cu_branch }}</b>
                                </div>
                                <div class="item-action mt20 pt10">
                                    <a href="{{ route('get.payment_card.delete', $item->id) }}" class="btn btn-xs btn-radius btn-secondary"><i class="fa fa-trash"></i> Delete</a>
                                    <a href="{{ route('get.payment_card.update', $item->id) }}" class="btn btn-xs btn-radius btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="{{ route('get.payment_card.active_main', $item->id) }}" class="btn btn-xs btn-radius btn-success"><i class="fa fa-eye"></i> Set Default</a>
                                </div>
                            </div>
                        @empty
                            <p>Dữ liệu chưa được cập nhật</p>
                        @endforelse
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/user_bank.js') }}"></script>
@stop
