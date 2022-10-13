<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user_family'=>['required', 'string'],
                'user_name'=>['required', 'string'],
                'email'=>['required', 'email', 'unique:students'],
                'login'=>['required', 'string', 'unique:students'],
                'pass'=>['required', 'size:8'],

        ];
    }
}
