<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;


    public function classes(){
        return $this->hasMany(Classe::class);
    }


    public function user(){
        return$this->belongsTo(User::class);

    }
}