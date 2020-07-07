<?php


namespace App\Http\Controllers\AuthAdmin;


use Illuminate\Http\Request;

class AdminLoginController
{
    public function getLoginAdmin(Request $request)
    {
        $data = [
            'email'    => '',
            'password' => ''
        ];
        if ($request->preview == "true") {
            $data = [
                'email'    => 'phu.preview@gmail.com',
                'password' => '123456789'
            ];
        }
        return view('admin::pages.auth.login', compact('data'));
    }

    public function postLoginAdmin(Request $request)
    {
        if (\Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('cms_get.admin');
        }

        return redirect()->back();
    }

    public function getLogoutAdmin()
    {
        \Auth::guard('admins')->logout();
        return redirect()->route('cms_get.login');
    }
}
