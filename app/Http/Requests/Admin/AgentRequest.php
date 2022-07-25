<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
            'subject'=>'required',
            'management'=>'required',
            'agent_code'=>'required|unique:offices',
            'work_history'=>'nullable',
            'apprentice'=>'nullable',
            'phone_office'=>'nullable',
            'address_office'=>'nullable',
            'is_owner'=>'required'
        ]);
    }
}