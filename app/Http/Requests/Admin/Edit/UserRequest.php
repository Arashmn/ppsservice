<?php

namespace App\Http\Requests\Admin\Edit;

use App\Http\Requests\Admin\parentRequest;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends parentRequest
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
            //
        ];
    }
}
