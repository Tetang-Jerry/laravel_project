<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table= 'transactions';
    protected $fillable=[
       'type_transaction','montant'
    ];

    public function user(){
        return $this->belongsTo(Alpha_transit_user::class, 'users_id', 'id');
    }

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }
}
