<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Map;
use Illuminate\Http\Request;

class PgGalleryController extends Controller
{
    public function index(){
        $map = Map::first();        
        $header = Header::first();
        $namepg = "Gallery";
        return view('front.pages.gallery',compact('header','namepg','map'));
    }
}
