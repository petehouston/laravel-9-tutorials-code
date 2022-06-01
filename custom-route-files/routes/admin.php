<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'showDashboard']);
    Route::get('/settings', [\App\Http\Controllers\AdminController::class, 'showSettings']);
});
