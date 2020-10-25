@extends('user::layouts.app_user')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/user_dashboard.css') }}">
@stop
@section('content')
    <div class="container">
        <div class="box">
            <div class="box-20 pt20 mr20">
                @include('user::components._inc_avatar')
            </div>
            <div class="box-80 pt20">
                <section>
                    <div class="box-title">{{ __('user.update_info.title_update_info') }}</div>
                    <form action="{{ route('post.update_info') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="">{{ __('user.update_info.form.label.name') }}</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="">
                            @if ($errors->first('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('user.update_info.form.label.email') }}</label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Enter email">
                            @if ($errors->first('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('user.update_info.form.label.phone') }}</label>
                            <input type="number" name="phone" class="form-control" value="{{ Auth::user()->phone }}" placeholder="Enter phone">
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
    <script src="{{ mix('js/user_dashboard.js') }}"></script>
@stop
