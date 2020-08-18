<?php

namespace Core\Admin\Http\Controllers\System;

use App\Models\System\Setting;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;

class CmsInformationController extends CmsAdminController
{
    public function index()
    {
        return view('admin::pages.system.information.index');
    }
}
