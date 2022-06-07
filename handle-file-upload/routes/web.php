<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blog.petehouston.com - Handle file upload in Laravel 9');
});

Route::get('/upload', [\App\Http\Controllers\UploadController::class, 'show']);
Route::post('/upload', [\App\Http\Controllers\UploadController::class, 'process']);
