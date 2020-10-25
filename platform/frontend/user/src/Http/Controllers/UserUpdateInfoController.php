<?php

namespace Frontend\User\Http\Controllers;

use App\Http\Requests\User\UserPasswordRequest;
use App\Http\Requests\User\UserUpdateInfoRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserUpdateInfoController extends BaseUserController
{
    public function updateInfo(UserUpdateInfoRequest $request)
    {
        User::find(get_data_user('web'))
            ->update($request->except('_token'));
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');

        return redirect()->back();
    }

    public function updatePassword(UserPasswordRequest  $request)
    {
        if ($request->ajax())
        {
            $password = Hash::make($request->password_new);
            User::where('id',get_data_user('web'))
                ->update([
                    'password' => $password
                ]);

            return response()->json(['code' => 200]);
        }
    }
}
