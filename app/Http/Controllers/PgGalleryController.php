<?php

namespace App\Http\Controllers;
use App\Models\Classe;
use App\Models\Footerdata;
use App\Models\Header;
use App\Models\Map;
use Illuminate\Http\Request;

class PgGalleryController extends Controller
{
    public function index(){
        $map = Map::first();        
        $header = Header::first();
        $namepg = "Gallery";
        $footerdatas = Footerdata::all();
        
        $recentClasses = Classe::take(2)->orderBy('date','ASC')->get();
        return view('front.pages.gallery',compact('header','namepg','map','footerdatas','recentClasses'));
    }
}
