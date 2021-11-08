<?php

namespace App\Http\Controllers;

use App\Models\Emailsended;
use Illuminate\Http\Request;

class EmailsendedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = Emailsended::all();
        return view('back.mailbox.allMail', compact('emails'));
        
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
     * @param  \App\Models\Emailsended  $emailsended
     * @return \Illuminate\Http\Response
     */
    public function show(Emailsended $emailsended)
    {
        $emailsended->lu = true;
        $emailsended->save();
        
        return view('back.mailbox.show',compact('emailsended'));
    }

    public function show2(Emailsended $emailsended)
    {
        $emailsended->lu = true;
        $emailsended->save();
        
        return view('back.mailbox.show2',compact('emailsended'));
    }
    public function newslettershow(Emailsended $emailsended)
    {
        $emailsended->lu = true;
        $emailsended->save();
        
        return view('back.mailbox.newslettershow',compact('emailsended'));
    }

    public function contactshow(Emailsended $emailsended)
    {
        $emailsended->lu = true;
        $emailsended->save();
        
        return view('back.mailbox.contactshow',compact('emailsended'));
    }
    public function eventshow(Emailsended $emailsended)
    {
        $emailsended->lu = true;
        $emailsended->save();
        
        return view('back.mailbox.eventshow',compact('emailsended'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emailsended  $emailsended
     * @return \Illuminate\Http\Response
     */
    public function edit(Emailsended $emailsended)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emailsended  $emailsended
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emailsended $emailsended)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emailsended  $emailsended
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emailsended $emailsended)
    {
        //
    }
}
