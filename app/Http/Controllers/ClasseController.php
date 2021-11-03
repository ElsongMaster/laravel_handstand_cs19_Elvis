<?php

namespace App\Http\Controllers;

use App\Mail\Creationcoursmail;
use App\Mail\Inscriptioncoursmail;
use App\Models\Categorie;
use App\Models\Classe;
use App\Models\ClasseTag;
use App\Models\ClasseUser;
use App\Models\Emailsended;
use App\Models\Newsletteradress;
use App\Models\Package;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        foreach(Classe::all() as $class){
            // dd($class);
            if($class->prioritaire === 1){
                $class->color= "green";
            }elseif((!$class->users->count()===15) && in_array((Carbon::createFromFormat('Y-m-d', $class->date)->diffInDays(now())),[1,2,3] ) ||(15-$class->users->count()===5)){
                $class->color= "orange";
            }elseif($class->users->count()===15 ||$class->date<now()->format('Y-m-d')){
                $class->color= "red";

            }
            $class->save();
        }

        $classes = Classe::orderByRaw("FIELD(color , 'green', 'orange', 'red') ASC")->get();
        return view('back.pages.home-page.sections.classe.allClasse',compact('classes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('back.pages.home-page.sections.classe.create', compact('tags','categories','packages'));
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
            "horaire"=>['required'],
            "categorie_id"=>['required'],
            "date"=>['required'],
        ]);
        $classe = new Classe;
        $classe->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img/class/', 'public');
        $classe->nom = $request->nom;
        $classe->package = $request->package;
        $classe->coach_id = 1;
        $classe->horaire = $request->horaire;
        $classe->categorie_id = $request->categorie_id;
        $classe->prioritaire = $request->prioritaire;
        if($request->prioritaire === 1){
             $classe->color= "green";
        }
        $classe->date = $request->date;
        $classe->save();


        
        $newsletteradress = Newsletteradress::all();
        $dataClasse = [
            "nom"=>$classe->nom,
            "image"=>$classe->image,
            "horaire"=>$classe->horaire,
            "categorie"=>$classe->categorie->nom,
            "effectif"=>$classe->users->count(),
            "date"=>$classe->date,
        ];

        $users = User::where('role_id','=',4)->take(4)->get();


        foreach($newsletteradress as $adress){
            // Mail::to($adress->email)->send(new Creationcoursmail($dataClasse));
            Mail::to('elvis@outlook.com')->send(new Creationcoursmail($dataClasse));

            $newMail = new Emailsended;
            $newMail->object = "Crétation du cours: ".$request->nom;
            $newMail->classe_id = $classe->id;
            $newMail->destinataire = $adress->email;
            $newMail->typemail = "création";
            $newMail->user_id = null;
            $newMail->lu = false;
            $newMail->texte = null;
            $newMail->save();
        }

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
        if($request->prioritaire === 1){
             $class->color= "green";
        }elseif(in_array((Carbon::createFromFormat('Y-m-d', $class->date)->diffInDays(now())),[1,2,3] ) || (15-$class->users->count()===5) ){
            $class->color= "orange";
        }elseif($class->users->count()===15 ||$class->date<now()->format('Y-m-d')){
            $class->color= "red";

        }
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
        $msg= "Inscription impossible vous êtes déjà inscrit à cette classe";
        $tagMsg = 'error';
        $userConnected = User::find($userId);
        $currentClasseIdsUser = [];
        foreach($userConnected->classes as $classe){
            array_push($currentClasseIdsUser, $classe->id);
        }

        if($userConnected->role->nom ==='user'){

            if(!in_array($classeId,$currentClasseIdsUser)){
                $classeToSubscribe= Classe::find($classeId);

                if(in_array($userConnected->package->nom, $classeToSubscribe->package)){
                    if($classeToSubscribe->users->count()<15){

                        $newInscritpion = new ClasseUser;
                        $newInscritpion->classe_id = $classeId;
                        $newInscritpion->user_id = $userId;
        
                        $newInscritpion->save();    
                        $msg= "Votre inscription à bien été enregistrer";
                        $tagMsg = 'success';
                        $dataClasse = [
                            "nom"=>$classeToSubscribe->nom,
                            "image"=>$classeToSubscribe->image,
                            "horaire"=>$classeToSubscribe->horaire,
                            "categorie"=>$classeToSubscribe->categorie->nom,
                            "effectif"=>$classeToSubscribe->users->count(),
                            "date"=>$classeToSubscribe->date,
                        ];
                        $userdata = [
                            "nom"=>$userConnected->name,
                        ];

                         Mail::to($userConnected->email)->send(new Inscriptioncoursmail($dataClasse,$userdata));
                         $newMail = new Emailsended;
                         $newMail->object = "Inscription au cours de ".$classeToSubscribe->nom;
                         $newMail->classe_id = $classeToSubscribe->id;
                         $newMail->typemail = "inscription";

                         $newMail->user_id = $userConnected->id;
                         $newMail->lu = false;
                         $newMail->texte = null;
                         $newMail->destinataire = $userConnected->email;
                         $newMail->save();

                        if((!$classeToSubscribe->prioritaire)&&(15-$classeToSubscribe->users->count()===5) ){
                            $classeToSubscribe->color = "orange";
                            $classeToSubscribe->save();
                        }elseif((!$classeToSubscribe->prioritaire)&&($classeToSubscribe->users->count()===15) ){
                             $classeToSubscribe->color = "red";
                            $classeToSubscribe->save();                           
                        }
                    }else{
                        $msg= "Inscription impossible,  le nombre maximum de personne pouvant s'incrire dans cette classe a été atteint";
                        $tagMsg = 'error';  
                    }
                }else{
                    $nomPackage = implode(' ou ',$classeToSubscribe->package);
                    $msg= "Inscription impossible,  vous devez possédez le package $nomPackage pour vous inscrire à cette classe";
                    $tagMsg = 'error';     
                }
            }
        }else{
                    $msg= "Inscription impossible, seul les utilisateurs dont le rôle est 'user' peuvent s'inscrire ";
                    $tagMsg = 'error';             
        }
        return redirect()->back()->with($tagMsg,$msg);
        


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
