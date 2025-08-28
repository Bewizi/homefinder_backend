<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signup', [UserController::class, 'signUp']);

Route::post('/signin', [UserController::class, 'signIn']);

Route::get('/properties', [PropertyController::class, 'allProperties']);

Route::get('/properties/{id}', [PropertyController::class, 'getProperty']);
