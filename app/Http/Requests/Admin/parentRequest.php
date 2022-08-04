<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class parentRequest extends FormRequest
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
    public function  rules()
    {
        return [
            'name'=>'required',
            'family'=>'required',
            'father'=>'required',
            'code_meli'=>'required|unique:users|regex:/^([0-9]){10}$/',
            'email'=>'nullable',
            'sex'=>'required',
            'mobile_number'=>'required|unique:users|numeric|digits:11|regex:/(09)[0-9]{9}/',
            'birthday'=>'nullable',
            'address'=>'nullable',
        ];
    }
}