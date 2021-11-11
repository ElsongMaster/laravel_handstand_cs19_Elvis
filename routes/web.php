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

//Affichage des pages front
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/class', [PgClassesController::class,'index'])->name('class');
Route::get('/blog', [PgBlogController::class,'index'])->name('blog');
Route::get('/about-us', [PgAboutusController::class,'index'])->name('about');
Route::get('/gallery', [PgGalleryController::class,'index'])->name('gallery');
Route::get('/contact', [PgContactController::class,'index'])->name('contact');

//Back
Route::get('/back', function () {
    return view('back.pages.homeBack');
})->middleware(['auth'])->name('back');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Slider
Route::resource('sliders', SliderController::class)->middleware(['coach_lead']);
Route::post('sliders/updateSelected', [SliderController::class,'updateSelected'])->middleware(['coach_lead'])->name('update2');
Route::get('/back/slide', [SliderController::class,'layoutslider'])->middleware(['coach_lead']);

//Classe
Route::resource('classes', ClasseController::class)->middleware(['user']);
Route::post('classes/{classeId}/{userId}/inscription',[ClasseController::class,'inscription'])->middleware(['user'])->name('inscription');
Route::get('back/layoutClasse',[ClasseController::class,'layoutClasse'])->middleware(['user'])->name('layoutClasses');
Route::get('classes/{classe}/showClass',[ClasseController::class,'showClass'])->middleware(['user'])->name('classes.showClasse');
Route::post('classes/{classeId}/{userId}/désinscription',[ClasseController::class,'desinscription'])->middleware(['user'])->name('désinscription');
Route::get('classes/{classe}/validate',[ClasseController::class,'validateClasse'])->middleware(['user'])->name('classes.validate');

//Header
Route::resource('headers', HeaderController::class)->middleware(['coach_lead']);

//Titre
Route::resource('titres', TitreController::class)->middleware(['coach_lead']);

//Trainer
Route::resource('coaches', CoachController::class)->middleware(['coach']);
Route::get('back/layoutTrainer', [CoachController::class,'layoutTrainer'])->middleware(['coach'])->name('layoutTrainers');

//Linksocial
Route::resource('linksocials', LinksocialController::class)->middleware(['coach_lead']);
Route::post('linksocials/{linksocial}/{coachId}', [LinksocialController::class,'updateLink'])->middleware(['coach_lead'])->name('updateLink');

//User
Route::resource('users', UserController::class)->middleware(['user']);

//Gallery
Route::resource('galleries', GallerieController::class)->middleware(['coach_lead']);
Route::get('back/layoutGallery', [GallerieController::class,'layoutGallery'])->middleware(['coach_lead'])->name('layoutGalleries');

//Testimony
Route::resource('testimonies', TestimonyController::class)->middleware(['coach_lead']);
Route::get('back/layoutTestimony', [TestimonyController::class,'layoutTestimony'])->middleware(['coach_lead'])->name('layoutTestimonies');

//Package
Route::resource('packages', PackageController::class)->middleware(['coach_lead']);
Route::get('back/layoutPackage', [PackageController::class,'layoutPackage'])->middleware(['coach_lead'])->name('layoutPackage');

//Paiement
Route::resource('paiement', PaiementController::class)->middleware(['user']);
Route::get('Validatepaiement/{package}', [PaiementController::class,'validatePaiement'])->middleware(['user'])->name('Validatepaiement');

//Emailsended
Route::resource('emailsendeds', EmailsendedController::class)->middleware(['coach_lead']);
Route::get('emailsendeds/{emailsended}/show2', [EmailsendedController::class,'show2'])->middleware(['coach_lead'])->name('emailsendeds.show2');
Route::get('emailsendeds/{emailsended}/newslettershow', [EmailsendedController::class,'newslettershow'])->middleware(['coach_lead'])->name('emailsendeds.newslettershow');
Route::get('emailsendeds/{emailsended}/contactshow', [EmailsendedController::class,'contactshow'])->middleware(['coach_lead'])->name('emailsendeds.contactshow');
Route::get('emailsendeds/{emailsended}/eventshow', [EmailsendedController::class,'eventshow'])->middleware(['coach_lead'])->name('emailsendeds.eventshow');

//Newsletter
Route::resource('newsletteradresses', NewsletteradressController::class)->middleware(['user']);

//Map
Route::resource('maps', MapController::class)->middleware(['coach_lead']);

//Event
Route::resource('events', EventController::class)->middleware(['coach_lead']);
Route::get('back/layoutEvent', [EventController::class,'layoutEvent'])->middleware(['coach_lead'])->name('layoutEvents');

//About
Route::resource('abouts', AboutController::class)->middleware(['coach_lead']);
Route::get('back/layoutAbout', [AboutController::class,'layoutAbout'])->middleware(['coach_lead'])->name('layoutAbouts');

//Footer
Route::resource('footerdatas', FooterdataController::class);
Route::get('back/layoutFooter',[ FooterdataController::class,'layoutFooter'])->middleware(['coach_lead'])->name('layoutFooters');

//Formulaire
Route::post('FormulaireContact',[FormulairecontactController::class,'store'])->name('storeContact');



// Route::get('backpgHome',[BackpgHomeController::class,'index'])->name('backpgHome');
require __DIR__.'/auth.php';
