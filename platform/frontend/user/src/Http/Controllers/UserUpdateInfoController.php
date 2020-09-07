<?php

namespace Frontend\User\Http\Controllers;

use App\Http\Requests\User\UserUpdateInfoRequest;
use App\User;

class UserUpdateInfoController extends BaseUserController
{
    public function updateInfo(UserUpdateInfoRequest $request)
    {
        User::find(get_data_user('web'))
            ->update($request->except('_token'));
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');

        return redirect()->back();
    }
}
