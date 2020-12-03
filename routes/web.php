<?php

use App\Http\Controllers\TrailerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::resource('trailers', TrailerController::class);
Route::get('/', [TrailerController::class, 'index'])->name('home');
Route::get('admin', [TrailerController::class, 'adminIndex'])->name('admin');

Auth::routes();