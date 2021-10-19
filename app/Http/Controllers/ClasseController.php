<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Classe;
use App\Models\ClasseTag;
use App\Models\ClasseUser;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::orderBy('prioritaire','DESC')->get();
        // currentDate = 

        return view('back.pages.home-page.sections.classe.allClasse',compact('classes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.home-page.sections.classe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "image"=>['required'],
            "nom"=>['required'],
            "coach_id"=>['required'],
            "horaire"=>['required'],
            "categorie_id"=>['required'],
            "effectif"=>['required'],
            "date"=>['required'],
        ]);
        $classe = new Classe;
        $classe->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img/class/', 'public');
        $classe->nom = $request->nom;
        $classe->coach_id = $request->coach_id;
        $classe->horaire = $request->horaire;
        $classe->categorie_id = $request->categorie_id;
        $classe->effectif = $request->effectif;
        $classe->date = $request->date;
        $classe->save();

        return redirect()->route('classes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        return view('back.pages.home-page.sections.classe.show',compact('classe'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $class)
    {
        
        $tags = Tag::all();
        $categories = Categorie::all();
        $tagToSelected = [];
        foreach($class->tags as $tag){
            if(!in_array($tag->id, $tagToSelected)){
                array_push($tagToSelected,$tag->id);
            }
        }
        return view('back.pages.home-page.sections.classe.edit',compact('class','categories','tags','tagToSelected'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Class  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $class)
    {
        $request->validate([
            "nom"=>['required'],
            "coach_id"=>['required'],
            "horaire"=>['required'],
            "categorie_id"=>['required'],
            "tags"=>['required'],
            "prioritaire"=>['required'],
            "date"=>['required'],
        ]);

        if($request->file('image') !== null){
            
            Storage::disk('public')->delete('img/class/'.$class->image);
            $class->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img/class/', 'public');
        }

        
        foreach(ClasseTag::all() as $item){
            if($class->id === $item->classe_id){

                $item->delete();
            }
        }

        foreach($request->tags as $id_tag){
            $elt = new ClasseTag;
            $elt->classe_id = $class->id;
            $elt->tag_id = $id_tag;

            $elt->save();

        }

        $class->nom = $request->nom;
        $class->coach_id = $request->coach_id;
        $class->horaire = $request->horaire;
        $class->prioritaire = $request->prioritaire;
        $class->categorie_id = $request->categorie_id;
        $class->date = $request->date;
        $class->save();

        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $class)
    {
        // Storage::disk('public')->delete('img/class/'.$class->image);
        $class->delete();
        foreach(ClasseTag::all() as $item){
            if($class->id === $item->classe_id){

                $item->delete();
            }
        }
        return redirect()->back()->with('success','Element correctement supprimer');;
    }


    /**
     * create links between classe and user.
     *
     * @return \Illuminate\Http\Response
     */
    public function inscription($classeId, $userId){
        $newInscritpion = new ClasseUser;
        $newInscritpion->classe_id = $classeId;
        $newInscritpion->user_id = $userId;

        $newInscritpion->save();

        return redirect()->back()->with('success','Votre inscription à bien été enregistrer');
        


    }

    /**
     * delete links between classe and user.
     * @return \Illuminate\Http\Response
     */
    public function desinscription($classeId, $userId){
        $msg = "Vous n'êtes pas inscrit dans cette classe";
        foreach(ClasseUser::all() as $inscrit){

            if($inscrit->classe_id === $classeId && $inscrit->user_id === $userId ){
                $inscrit->delete();
                $msg = 'Votre désinscription à bien été pris en compte';
            }
        }
        return redirect()->back()->with('error',$msg);
        

    }
}
