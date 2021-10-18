<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    public function classes(){
        return $this->belongsToMany(Classe::class,'pivot_classes_tags','tag_id','classe_id');
    }
}
