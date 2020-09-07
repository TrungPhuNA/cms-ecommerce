@extends('pages.auth.app_auth')
@section('content')
    <h5 class="card-title text-center">Đăng nhập</h5>
    <form class="form-signin" action="" method="POST">
        @csrf
        <div class="form-label-group">
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"
                   required autofocus>
            <label for="inputEmail">Email address</label>
        </div>
        <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                   required>
            <label for="inputPassword">Password</label>
        </div>
        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Remember password</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
        <hr class="my-4">
        <a href="{{ route('get.register') }}" title="Đăng ký">Đăng ký</a>
        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                class="fab fa-google mr-2"></i> Sign in with Google
        </button>
        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                class="fab fa-facebook-f mr-2"></i> Sign in with Facebook
        </button>
    </form>
@stop
