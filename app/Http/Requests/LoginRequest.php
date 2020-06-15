<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'usrname' => 'required',
            'pass' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'usrname.required' => 'Tên đăng nhập không được để trống',
            'pass.required' => 'Mật khẩu không được để trống',
            'pass.min' => 'Mật khẩu phải từ 3 ký tự',
        ];
    }
}
