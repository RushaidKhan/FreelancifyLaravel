<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function showLoginForm()
    {
        return view('Login');
    }
    public function showRegisterChoice()
    {
        return view("Register");
    }
    public function FreelancerRegister()
    {
        return view("Freelancer/FreelancerRegister");
    }
}
