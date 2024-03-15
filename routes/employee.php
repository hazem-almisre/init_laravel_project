<?php

use App\Http\Controllers\Login\AdminLoginController;
use App\Http\Controllers\Login\CompaneLoginController;
use App\Http\Controllers\Login\EmployeeLoginController;
use App\Http\Controllers\Login\UserLoginController;
use App\Http\Controllers\Register\EmployeeRegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login',EmployeeLoginController::class);

Route::post('signup',EmployeeRegisterController::class);

