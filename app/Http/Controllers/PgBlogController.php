<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Map;
use Illuminate\Http\Request;

class PgBlogController extends Controller
{
    public function index(){
        $map = Map::first();
        
        $header = Header::first();
        $namepg = "Blog";
        return view('front.pages.blog',compact('header','namepg','map'));
    }
}
