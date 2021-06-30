<?php

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

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('/workouts', [App\Http\Controllers\WorkoutController::class, 'workouts']);
    Route::get('/workout/{id}', [App\Http\Controllers\WorkoutController::class, 'show']);
    Route::get('/workout/{id}/exercises', [App\Http\Controllers\WorkoutController::class, 'exercises']);
});

//LOGIN USER
Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);
