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

            // 'code_meli'=>[Rule::unique('users')->ignore($this->code_meli)];
        ])
    }
}