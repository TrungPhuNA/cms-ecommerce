<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\FrontendRegisterRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('pages.auth.register');
    }

    public function postRegister(FrontendRegisterRequest $request)
    {
        $data               = $request->except("_token");
        $data['password']   = Hash::make($data['password']);
        $data['created_at'] = Carbon::now();
        $user = User::create($data);
        if ($user) {
            if (\Auth::attempt(['email' => $request->email,'password' => $request->password]))
                return redirect()->to('/');
        }
        return  redirect()->back();
    }
}
