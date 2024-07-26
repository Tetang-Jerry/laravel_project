<?php

namespace App\Http\Controllers\Amin;

use Illuminate\Http\Request;
use App\Models\Alpha_transit_user;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function adminView()
    {
  $users=Alpha_transit_user::orderBy('id','desc')->take(10)->get();
  return view('admin.admin',compact('users')  );
    }
}
