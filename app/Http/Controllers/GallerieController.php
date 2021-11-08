<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use Illuminate\Http\Request;

class GallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Gallerie::all();
        return view('back.gallery.allPhoto',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.gallery.create');
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
            "image"=>["required"],
        ]);

        $newphoto = new Gallerie;
        $newphoto->image = $rq->file('image')->hashName();
        $rq->file('image')->storePublicly('img/class/', 'public');

        $newphoto->save();
        return redirect()->back()->with('success','données correctement créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function show(Gallerie $gallerie)
    {
        return view('back.gallery.show',compact('gallerie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallerie $gallery)
    {
        return view('back.gallery.edit',compact('gallery'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Gallerie $gallery)
    {
        $rq->validate([
            "image"=>["required"],
        ]);



        $gallery->image = $rq->file('image')->hashName();
        $rq->file('image')->storePublicly('img/portfolio/', 'public');
        $gallery->position = $rq->position;
        $gallery->save();
        return redirect()->route('galleries.index')->with('success','données de la photo correctement update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $gallerie = Gallerie::find($id);
        $gallerie->delete();

        return redirect()->back()->with('success','photo correctement supprimer');
    }
}
