<?php

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
use App\Models\Header;
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
Route::get('/about', function () {
    return view('front.pages.about-us');
})->name('about');
// Route::get('/template', function () {
//     $header = Header::first();
//     return view('front.template.main',compact('header'));
// });
Route::get('/class', function () {
    $header = Header::first();
    return view('front.pages.class',compact('header'));
})->name('class');
Route::get('/contact', function () {
    $header = Header::first();
    return view('front.pages.contact');
})->name('contact');

Route::get('/gallery', function () {
    $header = Header::first();
    return view('front.pages.gallery');

})->name('gallery');
Route::get('/back', function () {
    return view('back.pages.homeBack');
})->name('back');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('sliders', SliderController::class);
Route::resource('classes', ClasseController::class);
Route::post('classes/{classeId}/{userId}/inscription',[ClasseController::class,'inscription'])->name('inscription');
Route::post('classes/{classeId}/{userId}/désinscription',[ClasseController::class,'desinscription'])->name('désinscription');
Route::post('sliders/updateSelected', [SliderController::class,'updateSelected'])->name('update2');
Route::resource('headers', HeaderController::class);
Route::resource('titres', TitreController::class);
Route::resource('coaches', CoachController::class);
Route::resource('linksocials', LinksocialController::class);
Route::post('linksocials/{linksocial}/{coachId}', [LinksocialController::class,'updateLink'])->name('updateLink');
Route::resource('users', UserController::class);
Route::resource('galleries', GallerieController::class);
Route::resource('testimonies', TestimonyController::class);
require __DIR__.'/auth.php';
