<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleFormRequest extends FormRequest
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
        if ($this->isMethod("POST")) {
            return [
                "title" => "bail|required|max:30|unique:roles",
            ];
        } else if ($this->isMethod("PUT") || $this->isMethod("PATCH")) {
            return [
                "title" => "bail|required|max:30",
            ];
        }
    }

    public function messages()
    {
        return [
            'required' => 'A title is required',
            'unique' => 'A title exist wth this name',
            'max' => 'A title should not be exceed then 30 characters',
        ];
    }
}
