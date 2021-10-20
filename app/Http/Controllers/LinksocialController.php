<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Linksocial;
use Illuminate\Http\Request;

class LinksocialController extends Controller
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
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function show(Linksocial $linksocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function edit(Linksocial $linksocial)
    {
        $icons = Icon::all();
        $coachId = $linksocial->coach->id;
        return view('back.pages.home-page.linksocial.edit',compact('linksocial','icons','coachId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linksocial $linksocial)
    {
        $request->validate([
            "lien"=>['required'],
            "icon_id"=>['required'],

        ]);
    

        $linksocial->lien = $request->lien;
        $linksocial->icon_id = $request->icon_id;

        $linksocial->save();

        return redirect()->back();

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function updateLink(Request $request, Linksocial $linksocial,$coachId)
    {
        $request->validate([
            "lien"=>['required'],
            "icon_id"=>['required'],

        ]);
    

        $linksocial->lien = $request->lien;
        $linksocial->icon_id = $request->icon_id;

        $linksocial->save();

        return redirect()->route('coaches.edit',$coachId)->with('success',"Le lien à bien été modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linksocial $linksocial)
    {

    }
}
