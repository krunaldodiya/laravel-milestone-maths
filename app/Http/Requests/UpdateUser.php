<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'id' => "required",
            'name' => "required|min:3",
            'email' => "required|email",
            'dob' => "required",
            'gender' => "required",
            'school_id' => "required",
            'education' => "required",
        ];
    }
}
