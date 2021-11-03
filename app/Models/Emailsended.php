<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emailsended extends Model
{
    use HasFactory;



    public function classe(){
        return $this->belongsTo(Classe::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
