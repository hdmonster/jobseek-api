<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobApplicantController;
use App\Http\Controllers\JobVacanciesController;
use App\Http\Controllers\SpecializationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::resource('/companies', CompanyController::class);
Route::resource('/jobs', JobController::class);
Route::get('/job-vacancies/{specializationId}', [JobVacanciesController::class, 'filterBySpecialization']);
Route::get('/job-vacancies/detail/{id}', [JobVacanciesController::class, 'show']);
Route::resource('/job-applicants', JobApplicantController::class);
Route::resource('/specializations', SpecializationController::class);
Route::get('/profile/{id}', [UserController::class, 'profile']);
Route::get('/profile/specialization/{id}', [UserController::class, 'filterBySpecialization']);
