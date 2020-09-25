<?php

namespace Frontend\User\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserUpdatePaymentCardRequest;
use App\Models\System\Bank;
use App\Models\System\CardUser;
use Carbon\Carbon;

class UserPaymentCardController extends BaseUserController
{
    public function index()
    {
        $banks = Bank::all();
        $cardsUser = CardUser::with('bank:id,b_name,b_avatar')
            ->where('cu_user_id', get_data_user('web'))
            ->orderBy('cu_user_id', 'DESC')
            ->get();

//        dd($cardsUser);

        $viewData = [
            'cardsUser' => $cardsUser
        ];
        return view('user::payment_card.index', $viewData);
    }

    public function create()
    {
        $banks = Bank::all();
        $viewData = [
            'banks' => $banks
        ];
        return view('user::payment_card.create', $viewData);
    }

    public function store(UserUpdatePaymentCardRequest $request)
    {
        $data = $request->except('_token');
        $data['cu_user_id'] = get_data_user('web');
        $data['created_at'] = Carbon::now();
        CardUser::insert($data);
        $this->showSuccessMessages();
        return redirect()->route('get.payment_card');
    }

    public function edit($id)
    {
        $cardUser = CardUser::where([
            'cu_user_id' => get_data_user('web'),
            'id' => $id
        ])->first();

        $banks = Bank::all();
        $viewData = [
            'banks'    => $banks,
            'cardUser' => $cardUser
        ];
        return view('user::payment_card.update', $viewData);
    }

    public function update(UserUpdatePaymentCardRequest  $request, $id)
    {
        $data = $request->except('_token');
        $data['cu_user_id'] = get_data_user('web');
        $data['created_at'] = Carbon::now();
        CardUser::find($id)->update($data);
        $this->showSuccessMessages();
        return redirect()->route('get.payment_card');
    }

    public function delete($id)
    {
        $this->showSuccessMessages('Chưa xử lý');
        return redirect()->route('get.payment_card');
    }

    public function activeMain($id)
    {
        CardUser::where([
            'cu_user_id' => get_data_user('web'),
            'id' => $id
        ])->update([
            'cu_main' => 1
        ]);
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');
        return redirect()->route('get.payment_card');
    }
}
