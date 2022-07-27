<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return array_merge(parentRequest::rules(),[
            'car_name'=>'nullable',
            'car_year'=>'nullable',
            'car_tage'=>'nullable',
            'car_number'=>'required|unique:car_ins|',
            'car_chassis'=>'required|unique:car_ins|',
            'ins_type'=>'nullable',
            'ins_company'=>'nullable',
            'ins_serialNumber'=>'required|unique:car_ins|',
            'password' => 'required|confirmed', 'min:8',
            'ins_premium'=>'nullable',
            'ins_expire'=>'nullable',
        ]);
    }
}