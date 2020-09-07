<?php

namespace Frontend\User\Http\Controllers;

use App\Http\Controllers\Controller;

class BaseUserController extends Controller
{
    public function showSuccessMessages($messages = 'Thêm mới dữ liệu thành công')
    {
        return \Session::flash('toastr', [
            'type'    => 'success',
            'message' => $messages
        ]);
    }

    public function showErrorMessages($messages = 'Xử lý dữ liệu thất bại')
    {
        return \Session::flash('toastr', [
            'type'    => 'error',
            'message' => $messages
        ]);
    }
}
