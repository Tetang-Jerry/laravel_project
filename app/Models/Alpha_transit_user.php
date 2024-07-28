<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Alpha_transit_user extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'alpha_transit_users';
    protected $fillable = [
        'nom', 'prenom', 'email', 'username', 'password', 'numero', 'code', 'passwordVerify', 'codeVerify', 'token', 'numCompte', 'tokenVerify', 'session'
    ];
}


