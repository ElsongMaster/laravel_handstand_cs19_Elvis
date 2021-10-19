<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

//Peut créer plusieurs cours
    public function classes(){
        return $this->hasMany(Classe::class);
    }

    //repésente un user
    public function user(){
        return$this->belongsTo(User::class);

    }

    //posséde plusieurs lien sociaux
    public function linksocials(){
        return $this->hasMany(Linksocial::class);
    }
}
