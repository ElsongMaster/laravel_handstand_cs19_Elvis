<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linksocial extends Model
{
    use HasFactory;



    //un lien social appartients à un coach
    public function coach(){
        return $this->belongsTo(Coach::class);
    }


    //un lien social posséde une icone
    public function icon(){
        return $this->belongsTo(Icon::class);
    }

}
