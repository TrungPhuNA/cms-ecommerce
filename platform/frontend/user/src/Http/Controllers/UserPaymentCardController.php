<?php

namespace Frontend\User\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\System\Bank;

class UserPaymentCardController extends Controller
{
    public function index()
    {
        $banks = Bank::all();
        $viewData = [
            'banks' => $banks
        ];
        return view('user::payment_card.index', $viewData);
    }
}
