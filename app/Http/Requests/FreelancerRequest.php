<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreelancerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'email' => ['required'],
            'city' => ['nullable'],
            'skills' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
