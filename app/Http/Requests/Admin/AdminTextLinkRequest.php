<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminTextLinkRequest extends FormRequest
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
            'tl_title' => 'required',
            'tl_link'  => 'required',
            'tl_sort'  => 'required',
            'tl_name'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tl_title.required' => 'Dữ liệu không được để trống',
            'tl_link.required'  => 'Dữ liệu không được để trống',
            'tl_sort.required'  => 'Dữ liệu không được để trống',
            'tl_name.required'  => 'Dữ liệu không được để trống',
        ];
    }
}
