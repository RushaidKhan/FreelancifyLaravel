<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployersRequest;
use App\Models\Employers;

class EmployersController extends Controller
{
    public function index()
    {
        return Employers::all();
    }

    public function store(EmployersRequest $request)
    {
        return Employers::create($request->validated());
    }

    public function show(Employers $employers)
    {
        return $employers;
    }

    public function update(EmployersRequest $request, Employers $employers)
    {
        $employers->update($request->validated());

        return $employers;
    }

    public function destroy(Employers $employers)
    {
        $employers->delete();

        return response()->json();
    }
}
