<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTypeRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('types')->ignore($this->type),
                'max:150',
                'min:3'
            ],
        ];
    }
    public function message()
    {
        return [
            'name.required' => 'The name is required',
            'name.unique:types' => 'This name already exist',
            'name.max' => 'The name must be a maximum of :max characters long',
            'name.min' => 'The name must be a minimum of :min characters long',
        ];
    }
}
