<?php
namespace Core\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsAdminController extends Controller
{
    public function index()
    {
        return view('admin::index');
    }

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
