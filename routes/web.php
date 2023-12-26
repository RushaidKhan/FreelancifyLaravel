<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\LandingPage;


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

Route::get('/', function () {return view('LandingPage');});

Route::get('/login', [LandingPage::class, 'showLoginForm'])->name('login');
Route::get('/Register', [LandingPage::class,'showRegisterChoice'])->name('Register');


Route::get('/freelancer/create', [FreelancerController::class, 'create'])->name('freelancer.create');
Route::post('/freelancer/store', [FreelancerController::class, 'store'])->name('freelancer.store');

Route::get('/employer/create', [EmployerController::class, 'create'])->name('employer.create');
Route::post('/employer/store', [EmployerController::class, 'store'])->name('employer.store');
