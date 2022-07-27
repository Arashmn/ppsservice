<?php

namespace App\Http\Requests\Admin\Edit;

use Illuminate\Foundation\Http\FormRequest;

class ParentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    static public function rules()
    {
        return [
            'name'=>'required',
            'family'=>'required',
            'father'=>'required',
            'code_meli'=>'nullable|exists:users,code_meli|regex:/^([0-9]){10}$/',
            'email'=>'nullable',
            'sex'=>'required',
            'password' => 'required|confirmed', 'min:8',
            'birthday'=>'nullable',
            'address'=>'nullable'
        ];
    }
}