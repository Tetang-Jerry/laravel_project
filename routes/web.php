<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Amin\AdminController;
use App\Http\Controllers\Amin\AdminLoginController;
use App\Http\Controllers\login_register\loginController;
use App\Http\Controllers\login_register\registerController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');

Route::middleware('auth:sanctum')->get('/dashboard', function () {
    // Route logic here
});


    Route::prefix('register')->group( function () {
        Route::get('/register', [registerController::class, 'registerView'])->name('registerView');
        Route::get('/register1', [registerController::class, 'registerView_1'])->name('registerView1');
        Route::post('/registerUser',[registerController::class,'registerUser'])->name('registerUser');
        Route::get('/register_2', [registerController::class, 'registerView_2'])->name('registerView2');
        Route::get('/modal', [registerController::class, 'modalView'])->name('modalView');
        Route::get('/code', [registerController::class, 'codeView'])->name('codeView');
        Route::post('/tokenVerify', [registerController::class, 'tokenVerify'])->name('tokenVerify');
    });


    Route::prefix('login')->group( function () {
        Route::get('/', [loginController::class, 'loginView'])->name('loginView');
        route::view('/mail','mail/reset-password-mail');
        Route::get('/passwordView', [loginController::class, 'passwordForgottenView'])->name('passView');
        Route::get('/modalVerif', [loginController::class, 'modalVerifView'])->name('modalVerifView');
        Route::get('/codeVerif', [loginController::class, 'codeVerifView'])->name('codeVerifView');
        Route::post('/loginUser', [loginController::class, 'loginUser'])->name('loginUser');
        Route::get('/logout', [loginController::class, 'logoutUser'])->name('logoutUser');
    });


    Route::prefix('dashboard')->group( function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardView'])->name('dashboardView');
        Route::get('/retrait', [DashboardController::class, 'retraitView'])->name('retraitView');
        Route::get('/recharge', [DashboardController::class, 'rechargeView'])->name('rechargeView');
        Route::get('/transfert', [DashboardController::class, 'transfertView'])->name('transfertView');
    });



    route::prefix('AT-admin')->group(function (){
        Route::get('/', [AdminController::class, 'adminView'])->name('adminView');
        Route::get('/login', [loginController::class, 'loginView'])->name('loginView');
        Route::get('/allUser', [AdminController::class, 'all'])->name('allUser');
        Route::get('/showUser', [AdminController::class, 'show'])->name('usersShow');
        Route::get('/accounts', [AdminController::class, 'Accounts'])->name('Accounts');
        Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
//        post method views

        Route::post('/store',[AdminLoginController::class ,'AuthAdmin'])->name('adminLog');
        route::post('/register', [AdminLoginController::class, 'AddAdmin'])->name('register');
        Route::post('/search', [AdminController::class, 'search'])->name('search');

//        delete method views

        Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
    });



