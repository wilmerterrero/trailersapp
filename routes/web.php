<?php

use App\Http\Controllers\TrailerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::resource('trailers', TrailerController::class);
Route::get('admin', [TrailerController::class, 'index'])->name('admin');

Auth::routes();