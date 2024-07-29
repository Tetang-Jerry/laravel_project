<?php

namespace App\Http\Controllers\Amin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    //
    public function AdminLogin(){
        return view('admin.login');
    }

    // public function AuthAdmin(AdminRequest $Request){
    //     $auth_view=$Request->only('email','password');
    //     if(Auth::guard('admin_auth')->attempt($auth_view)){
    //        return redirect()->intended('AT-admin/Dash-admin');

    //     }else{
    //         return redirect()->route('adminLogin')->with('error','email or password is incorrect');
    //     }
        
    // }
    public function AuthAdmin(AdminRequest $request)
    {
        dd($request);
        $from_view = $request->only('email', 'password');

        if (Auth::guard('admin_auth')->attempt($from_view)) {
            return redirect()->intended('AT-admin/Dash-admin');
        }else {
            return redirect()->route('adminLogin')->with('error', 'Email ou mot de passe incorrect');
        }
    }

    public function logoutUser()
    {
        if (Auth::guard('admin_auth')->check()) {
            Auth::guard('admin_auth')->logout();

        }
        return redirect()->route('adminLog');
    }

    public function AddAdmin(AdminRequest $admin){
        $admin=admins::create([
            'nom' => $admin->nom,
            'prenom' => $admin->prenom,
            'email' =>$admin->email,
            'password' =>bcrypt($admin->password),
            'number' =>$admin->number
        ]);
    }
}
