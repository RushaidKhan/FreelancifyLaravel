<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/login', [\App\Http\Controllers\LandingPage::class, 'showLoginForm'])->name('login');
Route::get('/Register', [\App\Http\Controllers\LandingPage::class,'showRegisterChoice'])->name('Register');
Route::get('/Register/freelancer', [\App\Http\Controllers\LandingPage::class,'FreelancerRegister'])->name('FreelancerRegister');
