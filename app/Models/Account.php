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
        'numcomp',
        'nom',
        'prenom',
        'compte courant',
        'compte epargne',
        'date_ouverture',
    ];
}
