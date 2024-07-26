<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alpha_user extends Model
{
    use HasFactory;
    protected $table="Alpha_user";
    protected $fillable = [
        "nom","prenom","email","password","numero","code","username",
    ] ;
}
