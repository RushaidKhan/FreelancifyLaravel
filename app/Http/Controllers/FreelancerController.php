<?php

namespace App\Http\Controllers;

use App\Http\Requests\FreelancerRequest;
use App\Models\Freelancer;

class FreelancerController extends Controller
{
    public function index()
    {
        return Freelancer::all();
    }

    public function store(FreelancerRequest $request)
    {
        return Freelancer::create($request->validated());
    }

    public function show(Freelancer $freelancer)
    {
        return $freelancer;
    }

    public function update(FreelancerRequest $request, Freelancer $freelancer)
    {
        $freelancer->update($request->validated());

        return $freelancer;
    }

    public function destroy(Freelancer $freelancer)
    {
        $freelancer->delete();

        return response()->json();
    }
}
