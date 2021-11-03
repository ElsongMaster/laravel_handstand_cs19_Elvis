<?php

namespace App\Http\Controllers;

use App\Mail\Welcomenewsletter;
use App\Models\Emailsended;
use App\Models\Newsletteradress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletteradressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletteradresses = Newsletteradress::all();
        return view('back.pages.home-page.newsletteradress.allNewsletteradress', compact('newsletteradresses'));
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
    public function store(Request $rq)
    {
        $tabAdress =[];
        $adresses = Newsletteradress::all();
        foreach($adresses as $adress){
            array_push($tabAdress,$adress->email);
        }
        if(!in_array($rq->email,$tabAdress)){

            $newAdress = new Newsletteradress;
    
            $newAdress->email = $rq->email;
            $newAdress->save();
            Mail::to('elvis@outlook.com')->send(new Welcomenewsletter());
            $newEmail = new Emailsended;
            $newEmail->object = "Merci pour votre inscription à notre newsletter!";
            $newEmail->typemail = "newsletter";
            $newEmail->destinataire =  $rq->email;
            $newEmail->classe_id = null;
            $newEmail->user_id = null;
            $newEmail->lu= false;
            $newEmail->texte= null;
            $newEmail->save();
            return redirect()->back()->with('success','email enregistré avec succés');
        }else{
            return redirect()->back()->with('error','cette email a déjà été enregistrer');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletteradress  $newsletteradress
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletteradress $newsletteradress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletteradress  $newsletteradress
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletteradress $newsletteradress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletteradress  $newsletteradress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletteradress $newsletteradress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletteradress  $newsletteradress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletteradress $newsletteradress)
    {
        $newsletteradress->delete();

        return redirect()->back()->with('success',"l'adresse à bien été supprimer");
    }
}
