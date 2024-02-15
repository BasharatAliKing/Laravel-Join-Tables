<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/',[userController::class,'studentData'])->name('home');

