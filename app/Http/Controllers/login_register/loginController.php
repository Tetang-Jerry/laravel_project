<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginView()
    {
        return view('login_register.login');
    }

    public function passwordForgottenView()
    {
        return view('login_register.password_forgotten.password_oublier');
    }

    public function modalVerifView()
    {
        return view('login_register.password_forgotten.modalVerification');
    }

    public function codeVerifView()
    {
        return view('login_register.password_forgotten.codeVerif');
    }

    public function loginUser(LoginFormRequest $request)
    {
        $from_view = $request->only('email', 'password');

        if (Auth::guard('user_auth')->attempt($from_view)) {
            $user = Auth::guard('user_auth')->user();

            if ($user->tokenVerify === '1') {
                //    $user->update(['session' => 1]);
                return redirect()->intended('dashboard/dashboard');
            } else {
                return redirect()->route('loginView')->with('error', 'Please verify your token first');
            }
        } else {
            return redirect()->route('loginView')->with('error', 'Email ou mot de passe incorrect');
        }
    }

    public function logoutUser()
    {
        if (Auth::guard('user_auth')->check()) {
            Auth::guard('user_auth')->logout();
            $user = Auth::guard('user_auth')->user();
        }
        // $user->update(['session' => 0]);
        return redirect()->route('loginView');
    }
}
