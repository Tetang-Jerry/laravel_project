<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardView() {
        return view('dashboard.main');
    }

    public function transfertView(){
        return view('dashboard.transfert');
    }

    public function retraitView(){
        return view('dashboard.retrait');
    }

    public function rechargeView(){
        return view('dashboard.recharge');
    }
}
