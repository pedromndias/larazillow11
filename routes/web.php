<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show']);

Route::resource('user-account', UserAccountController::class)
  ->only(['create']);