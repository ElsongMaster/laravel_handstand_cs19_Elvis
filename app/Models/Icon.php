<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    //une icone appartient à un lien social
    public function linksocials(){
        return $this->hasMany(Linksocial::class);
    }
}
