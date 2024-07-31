<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    //
    public function index()
    {
        // Récupérer tous les comptes de la base de données
        $accounts = Account::all();

        // Passer les comptes à la vue
        return view('layout.account', compact('accounts'));
    }
}
