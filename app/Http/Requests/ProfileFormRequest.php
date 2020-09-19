<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileFormRequest extends FormRequest
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
            "user_id" => "max:10",
            "phone" => "max:15",
            "country" => "max:250",
            "city" => "max:250",
            "gender" => "max:20",
        ];
    }

    public function messages()
    {
        return [
            "required" => "All fields are required",
            "user_id.max" => "User ID can not be exceeded by 10 digits.",
            "phone.max" => "Phone can not be exceeded by 15 digits.",
        ];
    }
}
