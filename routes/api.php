<?php

use App\Http\Controllers\API\AppointmentController;
use App\Http\Controllers\API\AuthController;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('appointment', AppointmentController::class);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
