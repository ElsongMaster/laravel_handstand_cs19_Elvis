<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heure extends Model
{
    use HasFactory;



    public function Jours(){
        return $this->hasMany(Jour::class);
    }


    public function semaine(){
        return $this->belongsTo(Semaine::class);
    }


}
