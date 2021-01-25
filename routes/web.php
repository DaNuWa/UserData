<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



//Routes for user informations
Route::get('/', [UserController::class,'index'])->name('user.index');


Route::post('/user/store', [UserController::class,'store'])->name('user.store');
