<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Mail\RegisterMail;
use App\Models\Alpha_transit_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

    public function registerUser(UserFormRequest $request) {

        $token =str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
       $user = Alpha_transit_user::create([
           'nom' => $request->nom,
           'prenom' => $request->prenom,
           'username' => $request->username,
           'email' => $request->email,
           'password' => bcrypt($request->password),
           'numero' => $request->numero,
           'code' => bcrypt($request->code),
           'token' => $token,
       ]);

       if ($user) {
           Mail::to($user->email)->send(new RegisterMail($user));
       }
        return redirect()->route('codeView');
    }
}
