<?php

namespace App\Http\Controllers\login_register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\Alpha_transit_user;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function registerView()
    {
        return view('login_register.register');
    }

    public function registerView_1()
    {
        return view('login_register.register_1');
    }

    public function registerView_2()
    {
        return view('login_register.register_2');
    }

    public function modalView() {
        return view('login_register.modal');
    }

    public function codeView()
    {
        return view('login_register.code');
    }

    public function register_user(UserFormRequest $request) {
       $user = Alpha_transit_user::create([
           'nom' => $request->nom,
           'prenom' => $request->prenom,
           'username' => $request->username,
           'email' => $request->email,
           'password' => bcrypt($request->password),
           'numero' => $request->numero,
           'code' => $request->code,
       ]);

       return redirect()->route('loginView');
    }
}
