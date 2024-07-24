<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alpha_transit_user extends Model
{
    use HasFactory;
    protected $table = 'alpha_transit_user';

    protected $fillable = [
        'nom', 'prenom', 'username', 'numero', 'code', 'email',
    ];
}
