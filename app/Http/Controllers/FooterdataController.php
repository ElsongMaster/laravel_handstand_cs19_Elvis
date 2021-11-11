<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Footerdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterdataController extends Controller
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
     * Display a preview of the resource index.
     *
     * @return \Illuminate\Http\Response
     */
    public function layoutFooter()
    {
        
        $classes = Classe::take(2)->orderBy('date','ASC')->get();
        
 
        $footerdatas = Footerdata::all();



        return view('back.footer.layoutFooter',compact('classes','footerdatas'));
        
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
     * @param  \App\Models\Footerdata  $footerdata
     * @return \Illuminate\Http\Response
     */
    public function show(Footerdata $footerdata)
    {
        return view('back.footer.show',compact('footerdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footerdata  $footerdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Footerdata $footerdata)
    {


        return view('back.footer.edit',compact('footerdata'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footerdata  $footerdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Footerdata $footerdata)
    {
        $rq->validate([
            "titre1"=>["required"],
            "titre2"=>["required"],
            "description"=>["required"],
            "email"=>["required"],
            "tel"=>["required"],
            "street"=>["required"],
            "numero"=>["required"],
            "zipcode"=>["required"],
            "city"=>["required"],
            "copyright"=>["required"],
            
        ]);

        if($rq->file('logo') !== null){
            
            Storage::disk('public')->delete('img/logo/'.$footerdata->image);
            $footerdata->image = $rq->file('logo')->hashName();
            $rq->file('image')->storePublicly('img/logo/', 'public');
        }

        $footerdata->titre1 = $rq->titre1;
        $footerdata->titre2 = $rq->titre2;
        $footerdata->description = $rq->description;
        $footerdata->email = $rq->email;
        $footerdata->tel = $rq->tel;
        $footerdata->map_id = 1;
        $footerdata->map->street = $rq->street;
        $footerdata->map->numero = $rq->numero;
        $footerdata->map->zipcode = $rq->zipcode;
        $footerdata->map->city = $rq->city;
        $footerdata->copyright = $rq->copyright;
        $footerdata->map->save();
        $footerdata->save();

        return redirect()->route('layoutFooters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footerdata  $footerdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footerdata $footerdata)
    {
        $footerdata->delete();

        return redirect()->back()->with('success',"footer correctement supprimé");
        
    }
}
