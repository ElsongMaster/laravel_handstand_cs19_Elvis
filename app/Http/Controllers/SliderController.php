<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('selected','DESC')->get();

        return view('back.slider.allSlider',compact('sliders'));
        
    }


    public function layoutslider()
    {
        // dd('dans ma fonction');
        $sliders = Slider::orderBy('selected','DESC')->get();

        return view('back.slider.layoutSlider',compact('sliders'));
        
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
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('back.slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            "titre"=>['required'],
            "soustitre"=>['required'],
            "span"=>['required'],
            "texte"=>['required'],
            "btn"=>['required'],
        ]);
    
        if($request->file('image') !== null){
            
            Storage::disk('public')->delete('img/slider/'.$slider->image);
            $slider->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img/slider/', 'public');
        }
        $slider->titre = $request->titre;
        $slider->soustitre = $request->soustitre;
        $slider->span = $request->span;
        $slider->texte = $request->texte;
        $slider->btn = $request->btn;
        $slider->save();

        return redirect()->route('headers.index');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function updateSelected(Request $rq)
    {

        $previousSliderSelected =  Slider::orderBy('selected','DESC')->get()->first();
        $previousSliderSelected->selected = false;
        $sliderSelected = Slider::find($rq->selected_id);
        $sliderSelected->selected = true;

        $previousSliderSelected->save();
        $sliderSelected->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        Storage::disk('public')->delete('img/slider/'.$slider->image);
        $slider->delete();
        return redirect()->back();
    }
}
