<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FreelancerRequest;
use App\Models\Freelancer;

class FreelancerController extends Controller
{
    public function create()
    {
        return view('Freelancer/FreelancerRegister');
    }

    public function store(FreelancerRequest $request)
    {
        // Validation logic is handled by the FreelancerRequest

        Freelancer::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'city' => $request->input('city'),
            'skills ' => $request->input('skills'),
        ]);

        // Redirect to the login page or wherever you want after registration
        return redirect()->route('login')->with('success', 'Registration successful!');
    }
}
