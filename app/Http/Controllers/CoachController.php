<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches = Coach::all();


        return view('back.trainer.allTrainer',compact('coaches'));
    }

    
    /**
     * Display a preview of the resource index.
     *
     * @return \Illuminate\Http\Response
     */
    public function layoutTrainer()
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.trainer.create');
        
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
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        return view('back.trainer.show', compact('coach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit(Coach $coach)
    {
        return view('back.trainer.edit', compact('coach'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coach $coach)
    {
        $request->validate([
            "image"=>['required'],

        ]);
    
        
        // Storage::disk('public')->delete('img/trainer/'.$coach->image);
        $coach->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img/trainer/', 'public');
        $coach->save();

        return redirect()->back()->with('success','les données relative au coach ont bien été mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {

        foreach($coach->linksocials as $linksocial){
            $linksocial->delete();
        }
        $coach->delete();

        return redirect()->back()->with('success','le coach à bien été supprimer');
    }
}
