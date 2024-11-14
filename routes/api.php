<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/registration', [AuthController::class, 'register']);
Route::middleware('auth:api')->get('/profile', [AuthController::class, 'profile']);
