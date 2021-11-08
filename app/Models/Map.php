<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;



    public function footerdata(){

        return $this->hasOne(Footerdata::class);

    }
}
