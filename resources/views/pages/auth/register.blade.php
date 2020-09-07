@extends('pages.auth.app_auth')
@section('content')
    <h5 class="card-title text-center">Đăng ký</h5>
    <form class="form-signin" action="" method="POST">
        @csrf
        <div class="form-label-group">
            <input type="text" id="inputName" name="name" class="form-control" placeholder="Name"
                    autofocus>
            <label for="inputEmail">Name</label>
            @if ($errors->first('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address"
                    autofocus>
            <label for="inputEmail">Email address</label>
            @if ($errors->first('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                   >
            <label for="inputPassword">Password</label>
            @if ($errors->first('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-label-group">
            <input type="password" id="inputPassword" name="confirm_password" class="form-control" placeholder="Password"
                   >
            <label for="inputPassword">Confirm Password</label>
            @if ($errors->first('confirm_password'))
                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
            @endif
        </div>
        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
        <hr class="my-4">
        <a href="{{ route('get.login') }}" title="Đăng nhập">Đăng nhập</a>
        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                class="fab fa-google mr-2"></i> Sign in with Google
        </button>
        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                class="fab fa-facebook-f mr-2"></i> Sign in with Facebook
        </button>
    </form>
@stop
