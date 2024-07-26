<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Alpha_transit_user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('index');
    }

}
