<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'company_name' => ['required'],
            'employer_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
            'city_country' => ['required'],
            'url' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
