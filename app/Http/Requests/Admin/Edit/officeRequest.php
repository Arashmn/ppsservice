<?php

namespace App\Http\Requests\Admin\Edit;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Admin\Edit\ParentRequest;

class officeRequest extends FormRequest
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
        return array_merge(ParentRequest::rules(),[
            'title'=>'required',
            'management'=>'required',
            'license_number'=>'required|unique:offices',
            'work_history'=>'nullable',
            'area'=>'nullable|numeric',
            'apprentice'=>'nullable|numeric',
            'work_history'=>'nullable|numeric',
            'phone_office'=>'nullable',
            'address_office'=>'nullable',
            'type'=>'required',
            'is_parking'=>'required',
            'is_owner'=>'required',
            'file'=>'nullable|mimes:jpeg,png,jpg',
        ]);
    }
}