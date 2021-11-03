<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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


        $rq->validate([
            "emailAdress"=>["required"],
            "cardname"=>["required"],
            "cardnumber"=>["required"],
            "cardvalidity"=>["required"],
            "cardsecuritycode"=>["required"],
            "country"=>["required"],
            "zipcode"=>["required"],
            "adress"=>["required"],
        ]);

        $paiement = new Paiement;
        $paiement->user_id = Auth::user()->id;
        $paiement->package_id = $rq->package_id;
        $paiement->emailAdress = $rq->emailAdress;
        $paiement->cardname = $rq->cardname;
        $paiement->cardnumber = $rq->cardnumber;
        $paiement->cardvalidity = $rq->cardvalidity;
        $paiement->cardsecuritycode = $rq->cardsecuritycode;
        $paiement->country = $rq->country;
        $paiement->zipcode = $rq->zipcode;
        $paiement->adress = $rq->adress;
        if($rq->numtva !==null){
            $paiement->numtva = $rq->numtva;
        }

        $paiement->save();

        $user = User::find(Auth::user()->id);
        $user->package_id = $rq->package_id;
        $user->save();

        return view('front.pages.modalPaiement');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(Paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit(Paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paiement $paiement)
    {
        //
    }
}
