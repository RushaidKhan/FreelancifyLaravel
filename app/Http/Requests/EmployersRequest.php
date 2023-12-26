<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployersRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'CompanyName' => ['required'],
            'EmployerName' => ['required'],
            'Email' => ['required'],
            'Password' => ['required'],
            'city/country' => ['required'],
            'url' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
