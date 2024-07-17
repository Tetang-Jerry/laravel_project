<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Amin\AdminController;


Route::get('/', [AdminController::class, 'adminView'])->name('admin');
Route::get('/user', [UserController::class, 'userView'])->name('user');



