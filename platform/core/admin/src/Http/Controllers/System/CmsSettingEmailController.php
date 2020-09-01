<?php


namespace Core\Admin\Http\Controllers\System;


use App\Http\Requests\AdminSettingEmailRequest;
use App\Models\Email;
use Core\Admin\Http\Controllers\CmsAdminController;

class CmsSettingEmailController extends CmsAdminController
{
    public function index()
    {
        $email = Email::first();
        return view('admin::pages.system.email.index', compact('email'));
    }

    public function store(AdminSettingEmailRequest $request)
    {
        $email = Email::first();
        if (!$email) $email = new Email();

        $email->em_driver       = $request->em_driver;
        $email->em_port         = $request->em_port;
        $email->em_host         = $request->em_host;
        $email->em_username     = $request->em_username;
        $email->em_password     = $request->em_password;
        $email->em_domain       = $request->em_domain;
        $email->em_from_address = $request->em_from_address;
        $email->save();

        $this->showSuccessMessages();
        return redirect()->back();
    }
}
