<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    // Si votre table s'appelle différemment, spécifiez le nom de la table
    // protected $table = 'nom_de_la_table';

    protected $fillable = [
        'compte_courant',
        'plan_epargne',
    ];

    public function user()
    {
        return $this->hasMany(Alpha_transit_user::class, 'account_id', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class, 'account_id', 'id');
    }
}
