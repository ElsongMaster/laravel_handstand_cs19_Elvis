<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $casts = [
        "package" => "array"
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function coach(){
        return $this->belongsTo(Coach::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'pivot_classes_tags','classe_id','tag_id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'pivot_classe_user','classe_id','user_id');
    }

    public function package(){
        return $this->hasOne(Package::class);
    }

    public function jour(){
        return $this->hasOne(Jour::class);
    }

    public function emailsended(){
        return $this->hasOne(Emailsended::class);
    }


}
