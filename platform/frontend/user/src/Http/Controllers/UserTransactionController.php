<?php

namespace Frontend\User\Http\Controllers;

use App\Http\Requests\User\UserUpdateInfoRequest;
use App\User;

class UserTransactionController extends BaseUserController
{
    public function index()
    {
        return view('user::transaction.index');
    }
}
