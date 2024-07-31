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


    public function AuthAdmin(Request $request)
    {

        $from_view = $request->only('email', 'password');

        if (Auth::guard('admin_auth')->attempt($from_view)) {
            $admin = Auth::guard('admin_auth')->user();
            $admin->update(['session' => 1]);
            return redirect()->intended('AT-admin/');
        }else {
            return redirect()->route('AdminLogin')->with('error', 'Email ou mot de passe incorrect');
        }
    }

    public function logoutAdmin()
    {
        if (Auth::guard('admin_auth')->check()) {
            $admin = Auth::guard('admin_auth')->user();
            $admin->update(['session' => 0]);
            Auth::guard('admin_auth')->logout();

        }
        return redirect()->route('AdminLogin');
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
