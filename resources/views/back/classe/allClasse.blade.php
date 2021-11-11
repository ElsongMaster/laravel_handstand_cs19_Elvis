@extends('back.template.main')










@section('backContent')
    <div class="container">

    <div class="d-flex justify-content-end m-3">
        <a href="{{route('layoutClasses')}}" class="btn btn-info text-light">Voir l'apercu</a>
    </div>
        <h2 class="text-center fs-2 text-decoration-underline">Toute les données de classes</h2>



        <h2 class="text-center fs-4 my-3">Voici les classes qui ont été validé:</h2>
        <div class="d-flex flex-wrap ">
            @foreach ($classes as $classe )
                @can('view',$classe)
                    
                <div class="card m-3 mx-auto {{$classe->color ==="green"?'green':''}} {{$classe->color ==="orange"?'orange':''}} {{$classe->color ==="green"?'green':''}} {{$classe->color ==="red"?'red':''}} " style="width: 18rem;">
                    @if (Storage::disk('public')->exists('img/class/'.$classe->image))
                    
                        <img src="{{asset('img/class/'.$classe->image)}}" class="card-img-top" alt="...">
                    @else
                        <img src="{{$classe->image}}" class="card-img-top" alt="...">
                    
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Nom: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->nom}}</span></h5>
                        <h5 class="card-title">Horaire: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->jour->heure->creneau}}</span></h5>
                        <p class="card-text">Catégorie: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->categorie->nom}}</span></p>
                        <p class="card-text">Prioritaire: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->prioritaire===1?'Oui':'Non'}}</span></p>
                        <p class="card-text">Effectif: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->users->count()}}</span></p>
                        <p class="card-text">Tag(s): <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">
                        @foreach ($classe->tags as $tag )
                        {{$tag->nom}},
                            
                        @endforeach    
                        </span></p>
                        <p class="card-text">Date du cours: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->date}}</span></p>
                        @can('coach_modifClasse',$classe)
                            
                        <form action="{{route('classes.destroy', $classe->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('classes.edit',$classe->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger my-2"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        @endcan

                    </div>
                </div> 
                @endcan

    
            @endforeach
            @can('coach_create_classe')
                
            <div class="container d-flex justify-content-center">
            
                <a href="{{route('classes.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
            </div>
            @endcan
        </div>

        <hr>

        <h2 class="text-center fs-4 my-3">Voici les classes qui n'ont pas encore été validé:</h2>
        <div class="d-flex flex-wrap mt-5">
            @foreach ($classesNonValide as $classe )
                @can('view',$classe)
                    
                <div class="card m-3 mx-auto {{$classe->color ==="green"?'green':''}} {{$classe->color ==="orange"?'orange':''}} {{$classe->color ==="green"?'green':''}} {{$classe->color ==="red"?'red':''}} " style="width: 18rem;">
                    @if (Storage::disk('public')->exists('img/class/'.$classe->image))
                    
                        <img src="{{asset('img/class/'.$classe->image)}}" class="card-img-top" alt="...">
                    @else
                        <img src="{{$classe->image}}" class="card-img-top" alt="...">
                    
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Nom: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->nom}}</span></h5>
                        <h5 class="card-title">Horaire: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->jour->heure->creneau}}</span></h5>
                        <p class="card-text">Catégorie: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->categorie->nom}}</span></p>
                        <p class="card-text">Prioritaire: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->prioritaire===1?'Oui':'Non'}}</span></p>
                        <p class="card-text">Effectif: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->users->count()}}</span></p>
                        <p class="card-text">Tag(s): <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">
                        @foreach ($classe->tags as $tag )
                        {{$tag->nom}},
                            
                        @endforeach    
                        </span></p>
                        <p class="card-text">Date du cours: <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->date}}</span></p>
                        <form action="{{route('classes.destroy', $classe->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('classes.edit',$classe->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger my-2"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        @can('coach_validate')
                            
                        <div class="d-flex justify-content-center">
                            <a href="{{route('classes.validate',$classe)}}" class="btn btn-info">Valider</a>
                        </div>
                        @endcan

                    </div>
                </div> 
                @endcan
    
            @endforeach

        </div>
    </div>

@endsection