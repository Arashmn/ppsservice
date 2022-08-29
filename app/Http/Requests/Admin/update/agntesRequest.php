<?php

namespace App\Http\Requests\Admin\update;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class agntesRequest extends FormRequest
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
            'agent_code'=> 'required',Rule::unique('offices')->ignore($this->office),
            'file'=>'nullable|mimes:jpg,png|size:8192',
        ];
    }
}
