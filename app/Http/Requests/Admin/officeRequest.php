<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class officeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
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
            'title'=>'required',
            'management'=>'required',
            'license_number'=>'required|unique:offices',
            'work_history'=>'nullable',
            'area'=>'nullable',
            'apprentice'=>'nullable',
            'phone_office'=>'nullable',
            'address_office'=>'nullable',
            'type'=>'required',
            'is_parking'=>'required',
            'is_owner'=>'required',

        ];
    }
}
