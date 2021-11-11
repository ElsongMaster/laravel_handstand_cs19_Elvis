<?php

namespace App\Http\Controllers;


use App\Models\Coach;
use App\Models\Classe;
use App\Models\Footerdata;
use App\Models\Header;
use App\Models\Map;
use App\Models\Package;
use App\Models\Semaine;
use App\Models\Testimony;
use App\Models\Titre;
use App\Models\Titretime;
use Illuminate\Http\Request;

class PgClassesController extends Controller
{
    public function index(){

        

        $titreClass = Titre::find(2);
        $titreSchedule = Titre::find(3);
        $titreTrainer = Titre::find(4);

        $titrePricing = Titre::find(7);
        $titreClient = Titre::find(8);
        $packages = Package::all();
        $classes = Classe::where('validate','=',true)->orderBy('prioritaire','DESC')->take(3)->get();
        $coaches = Coach::all();
        $coachLead = null;
        $testimonies = Testimony::all();
        
        $semaines = Semaine::paginate(1);
        $titretimes = Titretime::all();
        $footerdatas = Footerdata::all();
        foreach($coaches as $coach){
            if($coach->user->role->nom === "coach_lead" ){
                $coachLead = $coach;
            }
        }
        if($coachLead !== null){
            $coachesWithoutLead = Coach::where('id','!=',$coachLead->id)->take(3)->inRandomOrder()->get();
        }else{
           $coachesWithoutLead = $coaches; 
        }
// ---------------------------------------------

        $map = Map::first();
        $footerdatas = Footerdata::all();
        
        $recentClasses = Classe::take(2)->orderBy('date','ASC')->get();
        $header = Header::first();
        $namepg = $header->li3;
        return view('front.pages.class',compact('testimonies','titreClass','titreSchedule','titreTrainer','titrePricing','titreClient','packages','classes','coaches','coachLead','semaines','titretimes','coachesWithoutLead','coachLead','header','namepg','map','footerdatas','recentClasses'));
    }
}
