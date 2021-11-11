<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Classe;
use App\Models\Event;
use App\Models\Footerdata;
use App\Models\Header;
use App\Models\Map;
use App\Models\Testimony;
use App\Models\Titre;
use Illuminate\Http\Request;

class PgaboutusController extends Controller
{
    public function index(){

        $titreAbout = Titre::first();
        $abouts = About::all();
        $titreEvent = Titre::find(6);
        $events = Event::orderBy('selected','DESC')->take(1)->get();
        $titreClient = Titre::find(8);
        $testimonies = Testimony::all();

        $map = Map::first();
        
        $footerdatas = Footerdata::all();
        
        $recentClasses = Classe::take(2)->orderBy('date','ASC')->get();

        $header = Header::first();
        $namepg = $header->li2;
        return view('front.pages.about-us',compact('titreClient','testimonies','titreEvent','events','titreAbout','abouts','header','namepg','map','footerdatas','recentClasses'));
    }
}
