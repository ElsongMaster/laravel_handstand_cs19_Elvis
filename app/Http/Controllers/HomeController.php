<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Classe;
use App\Models\Header;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Titre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
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
        $classes = Classe::all();
        return view('front.pages.home',compact('header','sliders','about','titreAbout','titreClass','titreSchedule','titreTrainer','titreGallery','titreEvent','titrePricing','titreClient','packages','classes'));
    }
}
