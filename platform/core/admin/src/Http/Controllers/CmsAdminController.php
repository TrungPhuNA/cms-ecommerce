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
}
