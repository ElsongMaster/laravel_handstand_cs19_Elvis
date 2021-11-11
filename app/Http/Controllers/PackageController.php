<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Titre;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('back.packages.allPackage',compact('packages'));
    }
    /**
     * Display a preview of the resource index.
     *
     * @return \Illuminate\Http\Response
     */
    public function layoutPackage()
    {
        
        
        $titrePricing = Titre::find(7);
        $packages = Package::all();

        return view('back.packages.layoutPackage',compact('packages','titrePricing'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('back.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        $rq->validate([
            "nom"=>["required"],
            "titre"=>["required"],
            "prix"=>["required"],
            "frequence"=>["required"],
            "li1"=>["required"],
            "li2"=>["required"],
            "li3"=>["required"],
            "li4"=>["required"],
            "btn"=>["required"],
        ]);

        $package = new Package;
        $package->nom = $rq->nom;
        $package->titre = $rq->titre;
        $package->prix = $rq->prix;
        $package->frequence = $rq->frequence;
        $package->li1 = $rq->li1;
        $package->li2 = $rq->li2;
        $package->li3 = $rq->li3;
        $package->li4 = $rq->li4;
        $package->btn = $rq->btn;

        $package->save();


        return redirect()->route('packages.index')->with('success','Un nouveau package a correctement été créé');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('back.packages.show',compact('packages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('back.packages.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Package $package)
    {
        $rq->validate([
            "nom"=>["required"],
            "titre"=>["required"],
            "prix"=>["required"],
            "frequence"=>["required"],
            "li1"=>["required"],
            "li2"=>["required"],
            "li3"=>["required"],
            "li4"=>["required"],
            "btn"=>["required"],
        ]);

        $package->nom = $rq->nom;
        $package->titre = $rq->titre;
        $package->prix = $rq->prix;
        $package->frequence = $rq->frequence;
        $package->li1 = $rq->li1;
        $package->li2 = $rq->li2;
        $package->li3 = $rq->li3;
        $package->li4 = $rq->li4;
        $package->btn = $rq->btn;

        $package->save();


        return redirect()->route('packages.index')->with('success','Les données du packages ont bien été mise à jour');

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->back()->with('success','le package à bien été supprimer');
    }
}
