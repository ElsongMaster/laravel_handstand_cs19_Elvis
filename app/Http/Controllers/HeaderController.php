<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::first();
        return view('back.header.allheader', compact('header'));
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
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        return view("back.header.show",compact('header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view("back.header.edit",compact('header'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        $request->validate([
            "li1"=>['required'],
            "li2"=>['required'],
            "li3"=>['required'],
            "li4"=>['required'],
            "li5"=>['required'],
        ]);
    
        if($request->file('logo') !== null){
            Storage::disk('public')->delete('img/logo/'.$header->image);
            $header->logo = $request->file('logo')->hashName();
            $request->file('logo')->storePublicly('img/logo/', 'public');
        }
        $header->nom = $request->nom;
        $header->poste = $request->poste;
        $header->save();

        return redirect()->route('headers.show',$header->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        Storage::disk('public')->delete('img/logo/'.$header->image);
        $header->delete();
        return redirect()->back();
        
    }
}
