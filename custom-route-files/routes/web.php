<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/users')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\UserController::class, 'showDashboard']);
    Route::get('/settings', [\App\Http\Controllers\UserController::class, 'showSettings']);
});
