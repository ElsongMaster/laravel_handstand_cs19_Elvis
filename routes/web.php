<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\LinksocialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GallerieController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\EmailsendedController;
use App\Http\Controllers\FormulairecontactController;
use App\Http\Controllers\NewsletteradressController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PgClassesController;
use App\Http\Controllers\PgBlogController;
use App\Http\Controllers\PgAboutusController;
use App\Http\Controllers\PgGalleryController;
use App\Http\Controllers\PgContactController;
use App\Http\Controllers\BackpgHomeController;
use App\Http\Controllers\FooterdataController;
use App\Models\About;
use App\Models\Classe;
use App\Models\Coach;
use App\Models\Event;
use App\Models\Footerdata;
use App\Models\Gallerie;
use App\Models\Header;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Testimony;
use App\Models\Titre;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/class', [PgClassesController::class,'index'])->name('class');
Route::get('/blog', [PgBlogController::class,'index'])->name('blog');
Route::get('/about-us', [PgAboutusController::class,'index'])->name('about');
Route::get('/gallery', [PgGalleryController::class,'index'])->name('gallery');
Route::get('/contact', [PgContactController::class,'index'])->name('contact');


Route::get('/back', function () {
    return view('back.pages.homeBack');
})->name('back');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/paiement/{package}', function (Package $package) {

        $userIdConnected = Auth::user()->id;
        $packageIdsUser = [];
        foreach($package->users as $user){
            array_push($packageIdsUser,$user->id);
        }
        if(!in_array($userIdConnected,$packageIdsUser)){

            return view('front.pages.paiement',compact('package'));
        }else{
            return view('front.pages.modalPackageAlreadyExist');
        }
})->middleware(['auth'])->name('paiement');


Route::resource('sliders', SliderController::class);
Route::resource('classes', ClasseController::class);
Route::post('classes/{classeId}/{userId}/inscription',[ClasseController::class,'inscription'])->name('inscription');
Route::post('classes/{classeId}/{userId}/désinscription',[ClasseController::class,'desinscription'])->name('désinscription');
Route::post('sliders/updateSelected', [SliderController::class,'updateSelected'])->name('update2');
//  Route::get('sliders/print', [SliderController::class,'layoutslider']);
 Route::get('/slide', function()
    {
        // dd('dans ma fonction');
        $sliders = Slider::orderBy('selected','DESC')->get();

        return view('back.slider.layoutSlider',compact('sliders'));
        
    });
 Route::get('/layoutClasse', function()
    {
        
        $classes = Classe::orderBy('prioritaire','DESC')->get();

        $titreClass = Titre::find(2);

        return view('back.classe.layoutClasse',compact('classes','titreClass'));
        
    })->name('layoutClasses');

 Route::get('/layoutAbout', function()
    {
        
        
        $about = About::first();

        $titreAbout = Titre::first();


        return view('back.about.layoutAbout',compact('about','titreAbout'));
        
    })->name('layoutAbouts');

 Route::get('/layoutTrainer', function()
    {
        $titreTrainer = Titre::find(4);

          
        $coaches = Coach::all();
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

        return view('back.trainer.layoutTrainer',compact('titreTrainer','coaches','coachLead','coachesWithoutLead'));
        
    })->name('layoutTrainers');


     Route::get('/layoutGallery', function()
    {
        
        
         $titreGallery = Titre::find(5);


        $galleries = Gallerie::take(6)->inRandomOrder()->get();



        return view('back.gallery.layoutGallery',compact('galleries','titreGallery'));
        
    })->name('layoutGalleries');

     Route::get('/layoutPackage', function()
    {
        
        
        $titrePricing = Titre::find(7);




        $packages = Package::all();




        return view('back.packages.layoutPackage',compact('packages','titrePricing'));
        
    })->name('layoutPackage');
     Route::get('/layoutFooter', function()
    {
        
        $classes = Classe::take(2)->orderBy('date','ASC')->get();
        
 
        $footerdatas = Footerdata::all();



        return view('back.footer.layoutFooter',compact('classes','footerdatas'));
        
    })->name('layoutFooters');

     Route::get('/layoutEvent', function()
    {
        
        $titreEvent = Titre::find(6);
        
        
        $events = Event::orderBy('selected','DESC')->take(1)->get();



        return view('back.event.layoutEvent',compact('titreEvent','events'));
        
    })->name('layoutEvents');
    
     Route::get('/layoutTestimony', function()
    {
        
        $titreClient = Titre::find(8);
        
        
        $testimonies = Testimony::all();



        return view('back.testimony.layoutTestimony',compact('titreClient','testimonies'));
        
    })->name('layoutTestimonies');

Route::resource('headers', HeaderController::class);
Route::resource('titres', TitreController::class);
Route::resource('coaches', CoachController::class);
Route::resource('linksocials', LinksocialController::class);
Route::post('linksocials/{linksocial}/{coachId}', [LinksocialController::class,'updateLink'])->name('updateLink');
Route::resource('users', UserController::class);
Route::resource('galleries', GallerieController::class);
Route::resource('testimonies', TestimonyController::class);
Route::resource('packages', PackageController::class);
Route::resource('paiement', PaiementController::class);
Route::resource('emailsendeds', EmailsendedController::class);
Route::get('emailsendeds/{emailsended}/show2', [EmailsendedController::class,'show2'])->name('emailsendeds.show2');
Route::get('emailsendeds/{emailsended}/newslettershow', [EmailsendedController::class,'newslettershow'])->name('emailsendeds.newslettershow');
Route::get('emailsendeds/{emailsended}/contactshow', [EmailsendedController::class,'contactshow'])->name('emailsendeds.contactshow');
Route::get('emailsendeds/{emailsended}/eventshow', [EmailsendedController::class,'eventshow'])->name('emailsendeds.eventshow');
Route::resource('newsletteradresses', NewsletteradressController::class);
Route::resource('maps', MapController::class);
Route::resource('events', EventController::class);
Route::resource('abouts', AboutController::class);
Route::resource('footerdatas', FooterdataController::class);
Route::post('FormulaireContact',[FormulairecontactController::class,'store'])->name('storeContact');
Route::get('FormulaireContact/adress',[FormulairecontactController::class,'storeadress'])->name('storeadress');
Route::get('createadress',[FormulairecontactController::class,'createadress'])->name('createadress');
// Route::get('backpgHome',[BackpgHomeController::class,'index'])->name('backpgHome');
require __DIR__.'/auth.php';
