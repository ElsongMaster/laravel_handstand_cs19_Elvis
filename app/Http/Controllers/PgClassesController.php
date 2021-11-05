<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Map;
use Illuminate\Http\Request;

class PgClassesController extends Controller
{
    public function index(){
        $map = Map::first();
        
        $header = Header::first();
        $namepg = "Class";
        return view('front.pages.class',compact('header','namepg','map'));
    }
}
