<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;


    public function classe(){
        return $this->belongsTo(Classe::class);
    }


    public function paiement(){
        return $this->hasOne(Paiement::class);
    }


    public function users(){
        return $this->hasMany(User::class);
    }
}
