<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/',[userController::class,'studentData'])->name('home');
Route::get('/union',[userController::class,'uniontables'])->name('union');
Route::get('/when',[userController::class,'when'])->name('when');
Route::get('/chunk',[userController::class,'chunk'])->name('chunk');