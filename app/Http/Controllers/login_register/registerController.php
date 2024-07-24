<?php

namespace App\Http\Controllers\login_register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserformRequest;
use App\Model\Alpha_transite_user;




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

    public function register_uer(UserformRequest $request){
        $user = Alpha_transite_user::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username' => $request->username,
            'code' => $request->code,
            'numero' => $request->numero,
        ]);
      
    }
}
