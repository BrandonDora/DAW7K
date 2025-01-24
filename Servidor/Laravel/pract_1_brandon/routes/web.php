<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    return view('welcome');
//});

use App\Http\Controllers\DefaultController;

Route::get('/', [DefaultController::class, 'home']);

Route::get('/welcome', [DefaultController::class, 'welcome']);

Route::get('/ejemplo', [DefaultController::class, 'ejemplo']);