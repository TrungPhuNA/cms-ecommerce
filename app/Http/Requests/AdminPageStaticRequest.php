<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPageStaticRequest extends FormRequest
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
            'ps_link'        => 'required|unique:pages_static,ps_link,' . $this->id,
            'ps_title'       => 'required',
            'ps_description' => 'required',
            'ps_content'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ps_link.required'        => 'Dữ liệu không được để trống',
            'ps_link.unique'          => 'Dữ liệu đã tồn tại',
            'ps_title.required'       => 'Dữ liệu không được để trống',
            'ps_description.required' => 'Dữ liệu không được để trống',
            'ps_content.required'     => 'Dữ liệu không được để trống',
        ];
    }
}
