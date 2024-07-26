<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginView() {
        return view('login_register.login');
    }

    public function passwordForgottenView() {
        return view('login_register.password_forgotten.password_oublier');
    }

    public function modalVerifView() {
        return view('login_register.password_forgotten.modalVerification');
    }

    public function codeVerifView() {
        return view('login_register.password_forgotten.codeVerif');
    }

    public function login(Request $request) {

        $from_view = $request->only('email','password');

        if(Auth::guard('user_auth')->attempt($from_view)){
            # code...
            return redirect()->intendend('dashboard/dashboard');
        }else{
             # code...
            return redirect()->route('login')->witch('error', 'email ou mot de passe incorrect');
        }
    }

    public function logoutUser(){
        if(Auth::guard('user_auth')->check()){
            Auth::guard('user_auth')->logout();
            return redirect()->route('login');
        }
        return redirect()->route('login');
    }
}

   
