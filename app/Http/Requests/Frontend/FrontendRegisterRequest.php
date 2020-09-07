<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class FrontendRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'             => 'required',
            'email'            => 'required|max:190|min:3|unique:users,email,' . $this->id,
            'password'         => 'required',
            'confirm_password' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'Dữ liệu không được để trống',
            'email.required'            => 'Dữ liệu không được để trống',
            'email.unique'              => 'Dữ liệu đã tồn tại',
            'password.required'         => 'Dữ liệu không được để trống',
            'confirm_password.required' => 'Dữ liệu không được để trống',
            'confirm_password.same'     => 'Mật khẩu không khớp',
        ];
    }
}
