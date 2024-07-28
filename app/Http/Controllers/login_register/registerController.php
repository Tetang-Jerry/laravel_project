<?php

namespace App\Http\Controllers\login_register;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Mail\RegisterMail;
use App\Models\Alpha_transit_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function generationNumCompte(): int
    {
        do{
            $num_compte = random_int(100000000, 999999999);
        } while (Alpha_transit_user::where('numCompte', $num_compte)->exists());

        return $num_compte;
    }



    public function registerUser(UserFormRequest $request) {
        try {
            DB::transaction(function () use ($request) {
                $token =str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
                $num_compte = $this->generationNumCompte();
                $tokenVerify = 0;
                $session = 0;

                $user = Alpha_transit_user::create([
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'numero' => $request->numero,
                    'code' => bcrypt($request->code),
                    'token' => $token,
                    'numCompte' => $num_compte,
                    'tokenVerify' => $tokenVerify,
                    'session' => $session,
                ]);

                if ($user) {

                    Mail::to($user->email)->send(new RegisterMail($user));
                }
            });
        }catch (\Throwable $th) {

        }


        return redirect()->route('codeView');
    }

    public function tokenVerify(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        $token = $request->input('token');
        $user = Alpha_transit_user::where('token', $token)->first();

        if ($user) {
            $user->update(['tokenVerify' => 1]);
            return redirect()->route('loginView')->with('success', 'Token verified successfully');
        } else {
            return redirect()->route('codeView')->with('error', 'Token invalid');
        }

    }


}

