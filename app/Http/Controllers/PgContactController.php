<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Map;
use Illuminate\Http\Request;

class PgContactController extends Controller
{
    public function index(){
        $map = Map::first();
        
        $header = Header::first();
        $namepg = "Contact";
        return view('front.pages.contact',compact('header','namepg','map'));
    }
}
