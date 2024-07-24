<?php

use App\Http\Controllers\login_register\loginController;
use App\Http\Controllers\login_register\registerController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');


    Route::prefix('register')->group( function () {
        Route::get('/register', [registerController::class, 'registerView'])->name('registerView');
        Route::get('/register1', [registerController::class, 'registerView_1'])->name('registerView1');
        Route::get('/register_2', [registerController::class, 'registerView_2'])->name('registerView2');
        Route::get('/modal', [registerController::class, 'modalView'])->name('modalView');
        Route::get('/code', [registerController::class, 'codeView'])->name('codeView');
    });


    Route::prefix('login')->group( function () {
        Route::get('/login', [loginController::class, 'loginView'])->name('loginView');
        Route::get('/passwordView', [loginController::class, 'passwordForgottenView'])->name('passView');
        Route::get('/modalVerif', [loginController::class, 'modalVerifView'])->name('modalVerifView');
        Route::get('/codeVerif', [loginController::class, 'codeVerifView'])->name('codeVerifView');
    });


    Route::prefix('dashboard')->group( function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardView'])->name('dashboardView');
        Route::get('/retrait', [DashboardController::class, 'retraitView'])->name('retraitView');
        Route::get('/recharge', [DashboardController::class, 'rechargeView'])->name('rechargeView');
        Route::get('/transfert', [DashboardController::class, 'transfertView'])->name('transfertView');
    });

