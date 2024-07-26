<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Alpha_transit_user extends Model
{
    use HasFactory;

    protected $table = 'alpha_transit_users';
    protected $fillable = [
        'nom', 'prenom', 'email', 'username', 'password', 'numero', 'code', 'passwordVerify', 'codeVerify', 'token', 'numCompte'
    ];
}

class User extends Authenticatable
{
    use HasApiTokens;
    // ...
}
