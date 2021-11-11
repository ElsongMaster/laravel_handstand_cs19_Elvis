<?php

namespace App\Http\Controllers;
use App\Models\Classe;
use App\Models\Footerdata;
use App\Models\Gallerie;
use App\Models\Header;
use App\Models\Map;
use App\Models\Testimony;
use App\Models\Titre;
use Illuminate\Http\Request;

class PgGalleryController extends Controller
{
    public function index(){
        $titreGallery = Titre::find(5);
        $galleries = Gallerie::take(6)->inRandomOrder()->get();
        $titreClient = Titre::find(8);
        $testimonies = Testimony::all();

        $map = Map::first();        
        $header = Header::first();
        $namepg = $header->li4;
        $footerdatas = Footerdata::all();
        
        $recentClasses = Classe::take(2)->orderBy('date','ASC')->get();
        return view('front.pages.gallery',compact('testimonies','titreClient','galleries','titreGallery','header','namepg','map','footerdatas','recentClasses'));
    }
}
