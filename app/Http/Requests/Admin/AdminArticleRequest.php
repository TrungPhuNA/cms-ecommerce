<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminArticleRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'a_name'        => 'required|unique:articles,a_name,' . $this->id,
            'a_description' => 'required|max:180',
            'a_content'     => 'required',
            'a_menu_id'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'a_name.required'        => 'Dữ liệu không được để trống',
            'a_name.unique'          => 'Dữ liệu đã tồn tại',
            'a_description.required' => 'Dữ liệu không được để trống',
            'a_description.max'      => 'Mô tả không vượt quá 180 ký tự',
            'a_menu_id.required'     => 'Dữ liệu không được để trống',
            'a_content.required'     => 'Dữ liệu không được để trống',
        ];
    }
}
