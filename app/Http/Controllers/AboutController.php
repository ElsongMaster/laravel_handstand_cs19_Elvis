<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Display preview of the resource index.
     *
     * @return \Illuminate\Http\Response
     */
    public function layoutAbout()
    {
        
        
        $abouts = About::all();

        $titreAbout = Titre::first();


        return view('back.about.layoutAbout',compact('abouts','titreAbout'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('back.about.show',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('back.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, About $about)
    {
        $rq->validate([
            "p1"=>["required"],
            "p2"=>["required"],
            "btn"=>["required"],
            "video"=>["required"],
        ]);
        if($rq->file('image') !== null){
            
            // Storage::disk('public')->delete('img/about/'.$about->image);
            $about->image = $rq->file('image')->hashName();
            $rq->file('image')->storePublicly('img/about/', 'public');
        }

        $about->p1 = $rq->p1;
        $about->p2 = $rq->p2;
        $about->btn = $rq->btn;
        $about->video = $rq->video;

        $about->save();

        return redirect()->route('abouts.show',$about->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        // Storage::disk('public')->delete('img/about/'.$about->image);
        $about->delete();
        return redirect()->back()->with('success','about correctement supprimer');
    }
}
