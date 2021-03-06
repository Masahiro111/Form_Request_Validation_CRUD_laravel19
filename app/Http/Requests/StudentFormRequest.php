<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
        $rules = [
            'fullname' => [
                'required',
                'string',
                'max:255'
            ],
            'phone' => [
                'required',
                'numeric',
            ],
            'course' => [
                'required',
                'string',
                'max:255'
            ],
        ];

        if ($this->getMethod() == "POST") {
            $rules += [
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    'unique:students,email'
                ],
            ];
        }

        return $rules;
    }
}
