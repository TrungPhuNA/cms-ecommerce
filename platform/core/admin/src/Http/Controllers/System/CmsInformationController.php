<?php

namespace Core\Admin\Http\Controllers\System;

use Core\Admin\Http\Controllers\CmsAdminController;

class CmsInformationController extends CmsAdminController
{
    public function index()
    {
        return view('admin::pages.system.information.index');
    }
}
