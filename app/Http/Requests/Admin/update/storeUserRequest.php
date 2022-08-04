<?php

namespace App\Http\Requests\Admin\update;

use App\Http\Requests\Admin\parentRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class storeUserRequest extends parentRequest
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
        return array_merge(parent::rules(),[

            'password'=>'nullable|min:8|confirmed',
            'code_meli'=>[Rule::unique('users')->ignore($this->user)],
            'mobile_number'=>[Rule::unique('users')->ignore($this->user)],
            'image'=>'required|mimes:jpg,png|size:8192'

        ]);
    }
    public function messages()
    {
        return [

            'image.*'=>'فایل باید دارای فرمت  JPG، PNG مجاز باشن.'
        ];

    }
}