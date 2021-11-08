<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Footerdata;
use App\Models\Header;
use App\Models\Map;
use Illuminate\Http\Request;

class PgaboutusController extends Controller
{
    public function index(){
        $map = Map::first();
        
        $footerdatas = Footerdata::all();
        
        $recentClasses = Classe::take(2)->orderBy('date','ASC')->get();

        $header = Header::first();
        $namepg = "About us";
        return view('front.pages.about-us',compact('header','namepg','map','footerdatas','recentClasses'));
    }
}
