<?php

namespace App\Http\Controllers;

use App\Mail\Formulairecontact;
use App\Models\Emailsended;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
class FormulairecontactController extends Controller
{
    public function store(Request $rq){

        $newEmail = new Emailsended;
        $newEmail->object = "Demande de contact";
        $newEmail->typemail = "contact";
        $newEmail->destinataire = "handstandofficial@gmail.com";
        $newEmail->classe_id = null;
        $newEmail->user_id = null;
        $newEmail->lu = false;
        $newEmail->texte =[$rq->name,$rq->email,$rq->subject] ;
        $newEmail->save();

        $dataMsg = [
            "namesender"=>$newEmail->texte[0],
            "emailsender"=>$newEmail->texte[1],
            "subjectsender"=>$newEmail->texte[2],
        ];

        Mail::to('elvis@outlook.com')->send(new Formulairecontact($dataMsg));
        return redirect()->back();
    }




}
