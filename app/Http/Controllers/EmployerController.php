<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployerRequest;
use App\Models\Employer;

class EmployerController extends Controller
{
    public function store(EmployerRequest $request)
    {
        // Validation logic is handled by the EmployerRequest

        Employer::create([
            'company_name' => $request->input('company_name'),
            'employer_name' => $request->input('employer_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'city_country' => $request->input('city_country'),
            'url' => $request->input('url'),
        ]);

        // Redirect to the login page or wherever you want after registration
        return redirect()->route('login')->with('success', 'Registration successful!');
    }
}
