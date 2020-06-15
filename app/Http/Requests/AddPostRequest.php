<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostRequest extends FormRequest
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
            'po_title' => 'required|max:100',
            'po_summ' => 'max:250',
            'po_content' => 'required|max:10000',
            'po_img' => 'required',
        ];
    }
}
