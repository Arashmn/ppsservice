<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class officesRequest extends FormRequest
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
    public function rules()
    {
        return [
            'user_id' => 'required|unique:offices',
            'title' => 'required',
            'management' => 'nullable',
            'work_history' => 'nullable|numeric',
            'phone_office' => 'nullable',
            'address_office' => 'nullable',
            'is_owner'=>'required',
            'file' => 'nullable|mimes:jpg,png|size:8192',
        ];
    }
}