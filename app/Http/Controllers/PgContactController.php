<?php

namespace App\Http\Controllers;
use App\Models\Classe;
use App\Models\Footerdata;
use App\Models\Header;
use App\Models\Map;
use App\Models\Testimony;
use App\Models\Titre;
use Illuminate\Http\Request;

class PgContactController extends Controller
{
    public function index(){
        $testimonies = Testimony::all();
        $titreClient = Titre::find(8);

        $map = Map::first();
        $footerdatas = Footerdata::all();
        
        $recentClasses = Classe::take(2)->orderBy('date','ASC')->get();       
        $header = Header::first();
        $namepg = $header->li5;
        return view('front.pages.contact',compact('titreClient','testimonies','header','namepg','map','footerdatas','recentClasses'));
    }
}
