<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/registration', [ApiController::class, 'registration']);
Route::get('/users', [ApiController::class, 'users']);
Route::get('/profile/{id}', [ApiController::class, 'profile']);
