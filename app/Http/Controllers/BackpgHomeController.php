<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Classe;
use App\Models\Coach;
use App\Models\Event;
use App\Models\Gallerie;
use App\Models\Header;
use App\Models\Map;
use App\Models\Package;
use App\Models\Semaine;
use App\Models\Slider;
use App\Models\Testimony;
use App\Models\Titre;
use App\Models\Titretime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BackpgHomeController extends Controller
{
    public function index(){
        
        $titreAbout = Titre::first();
        $titreClass = Titre::find(2);
        $titreSchedule = Titre::find(3);
        $titreTrainer = Titre::find(4);
        $titreGallery = Titre::find(5);
        $titreEvent = Titre::find(6);
        $titrePricing = Titre::find(7);
        $titreClient = Titre::find(7);
        $header = Header::first();
        $sliders = Slider::orderBy('selected','DESC')->get();
        $about = About::first();
        $packages = Package::all();
        $classes = Classe::orderBy('prioritaire','DESC')->get();
        $coaches = Coach::all();
        $coachLead = null;
        $galleries = Gallerie::take(6)->inRandomOrder()->get();
        $events = Event::orderBy('selected','DESC')->take(1)->get();
        $testimonies = Testimony::all();
        
        $map = Map::first();
        Carbon::now();
        $semaines = Semaine::paginate(1);
        $titretimes = Titretime::all();


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
        $count = 1;
        return view('back.pages.home-page.allPgHome',compact('header','sliders','about','titreAbout','titreClass','titreSchedule','titreTrainer','titreGallery','titreEvent','titrePricing','titreClient','packages','classes','coaches','coachLead','coachesWithoutLead','count','galleries','events','testimonies','map','semaines','titretimes'));

    }
}
