<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreelancerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'FirstName' => ['required'],
            'LastName' => ['required'],
            'UserName' => ['required'],
            'Password' => ['required'],
            'Email' => ['required'],
            'City' => ['nullable'],
            'Skills' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
