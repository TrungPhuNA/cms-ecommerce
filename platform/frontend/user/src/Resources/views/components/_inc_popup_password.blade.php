<div id="update-password" class="modal text-center">
    <div class="header">Cập nhật mật khẩu</div>
    <div class="content">
        <form action="{{ route('post.update_password') }}" id="form_password" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
{{--            <div class="form-group text-align-left">--}}
{{--                <label for="">Mật khẩu cũ <span>*</span></label>--}}
{{--                <input type="password" name="password_old" class="form-control" value="" placeholder="">--}}
{{--                <span class="error-form"></span>--}}
{{--            </div>--}}
            <div class="form-group text-align-left">
                <label for="exampleInputEmail1">Mật khẩu mới <span>*</span></label>
                <input type="password" class="form-control" name="password_new" value="" placeholder="">
                <span class="error-form"></span>
            </div>
            <div class="form-group text-align-left">
                <label for="">Xác nhận mật khẩu <span>*</span></label>
                <input type="password" name="password_confirm" class="form-control" value="" placeholder="">
                <span class="error-form"></span>
            </div>
            <button type="submit" class="btn btn-blue btn-md js-update-password">Cập nhật</button>
        </form>
    </div>
    <div class="footer">

    </div>
</div>
