<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class officeRequest extends officesRequest
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
            'license_number' => 'required|unique:offices',
            'work_history'=>'nullable',
            'area'=>'nullable|numeric',
            'apprentice'=>'nullable|numeric',
            'subject'=>'required',
            'is_parking'=>'required',
            'image_file'=>'nullable|mimes:jpg,png|size:8192'
        ]);

    }
}