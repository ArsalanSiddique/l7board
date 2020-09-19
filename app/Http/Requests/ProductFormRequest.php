<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
        if ($this->isMethod('POST')) {
            return [
                "category_id" => "bail|required|max:10",
                "name" => "bail|required|max:250",
                "details" => "required",
                "price" => "required",
                "photo" => "required",
            ];
        }else if ($this->isMethod('PUT') || $this->isMethod('PATCH') ) {
            return [
                "category_id" => "bail|required|max:10",
                "name" => "bail|required|max:250",
                "details" => "required",
                "price" => "required",
            ];
        }
    }

    public function messages()
    {
        return [
            "required" => "All fields are required",
            "name.max" => "Name can not be exceeded by 250 characeters.",
            "category_id.max" => "Category ID can not be exceeded by 10 digits.",
        ];
    }
}
