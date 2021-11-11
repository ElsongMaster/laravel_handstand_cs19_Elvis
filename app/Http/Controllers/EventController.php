<?php

namespace App\Http\Controllers;

use App\Mail\Eventcreate;
use App\Models\Emailsended;
use App\Models\Event;
use App\Models\Newsletteradress;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('back.event.allEvent',compact('events'));
    }
    /**
     * Display a preview of the resource index.
     *
     * @return \Illuminate\Http\Response
     */
    public function layoutEvent()
    {
        
        $titreEvent = Titre::find(6);
        
        
        $events = Event::orderBy('selected','DESC')->take(1)->get();



        return view('back.event.layoutEvent',compact('titreEvent','events'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


         return view('back.event.create');

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
            "titre"=>["required"],
            "description"=>["required"],
            "date"=>["required"],
            "heure"=>["required"],
            "selected"=>["required"]
        ]);

        $newEvent = new Event;
        $newEvent->titre = $rq->titre;
        $newEvent->description = $rq->description;
        $newEvent->date = $rq->date;
        $newEvent->heure = $rq->heure;
        $newEvent->selected = $rq->selected;
        if($rq->selected){
            foreach(Event::all() as $event){
                $event->selected = false;
                $event->save();

            }
        }
        $newEvent->save();
        
        $newsletteradress = Newsletteradress::all();
        $eventdata = [
            "titre"=>$rq->titre,
            "description"=>$rq->description,
            "date"=>$rq->date,
            "heure"=>$rq->heure,
        ];
        foreach($newsletteradress as $adress){
           
            Mail::to('elvis@outlook.com')->send(new Eventcreate($eventdata));

            $newMail = new Emailsended;
            $newMail->object = "Crétation d'un nouvel event! ";
            $newMail->classe_id = null;
            $newMail->destinataire = $adress->email;
            $newMail->typemail = "event";
            $newMail->user_id = null;
            $newMail->lu = false;
            $newMail->texte = [$rq->titre,$rq->description,$rq->date,$rq->heure];
            $newMail->save();
        }


        return redirect()->route('events.index')->with('success','Event crée avec succès');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('back.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('back.event.edit', compact('event'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Event $event)
    {
        $rq->validate([
            "titre"=>["required"],
            "description"=>["required"],
            "date"=>["required"],
            "heure"=>["required"],
            "selected"=>["required"]

        ]);

        $event->titre = $rq->titre;
        $event->description = $rq->description;
        $event->date = $rq->date;
        $event->heure = $rq->heure;
        $event->selected = $rq->selected;
            if($rq->selected){
                foreach(Event::where('id','!=',$event->id)->get() as $eventbis){
                    $eventbis->selected = false;
                    $eventbis->save();
    
                }
            }
        $event->save();

        return redirect()->route('events.index')->with('success','Event crée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->back()->with('success', 'Event correctement supprimé');
    }
}
