<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerdata extends Model
{
    use HasFactory;

    protected $casts = [
        "copyright" => "array"
    ];
    public function map(){
        return $this->belongsTo(Map::class);
    }
}
