<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    use HasFactory;

    public function classe(){
        return $this->belongsTo(Classe::class);
    }
    public function heure(){
        return $this->belongsTo(Heure::class);
    }
}
