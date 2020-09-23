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
                    <form action="{{ route('post.update_info') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="">{{ __('user.payment_card.form.label.bank') }} <span>(*)</span></label>
                            <select name="" id="" class="form-control js-select2-bank">
                                <option value="">
                                    @foreach($banks as $bank)
                                        <option value="{{ $bank->id }}">{{ $bank->b_name }}</option>
                                    @endforeach
                                </option>
                            </select>
                            @if ($errors->first('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('user.payment_card.form.label.branch') }} <span>(*)</span></label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="">
                            @if ($errors->first('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('user.payment_card.form.label.account_holder') }} <span>(*)</span></label>
                            <input type="number" name="phone" class="form-control" value="{{ Auth::user()->phone }}" placeholder="">
                            @if ($errors->first('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('user.payment_card.form.label.stk') }} <span>(*)</span></label>
                            <input type="number" name="phone" class="form-control" value="{{ Auth::user()->phone }}" placeholder="">
                            @if ($errors->first('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-blue btn-md">Cập nhật</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/user_bank.js') }}"></script>
@stop
