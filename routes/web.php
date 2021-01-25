<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



//Routes for user informations
Route::get('/', [UserController::class,'index'])->name('user.index');
Route::get('/ajax', [UserController::class,'ajax'])->name('user.ajax');


Route::post('/user/store', [UserController::class,'store'])->name('user.store');
