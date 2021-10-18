@extends('back.template.main')










@section('backContent')
    <div class="container">

        <h2 class="text-center fs-2">Toute les données de classes</h2>



        <div class="d-flex flex-wrap ">
            @foreach ($classes as $classe )
                    
                <div class="card m-3 {{$classe->prioritaire?'bg-success':''}}" style="width: 18rem;">
                    <img src="{{asset('img/class/'.$classe->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nom: <span class="text-info">{{$classe->nom}}</span></h5>
                        <h5 class="card-title">Horaire: <span class="text-info">{{$classe->horaire}}</span></h5>
                        <p class="card-text">Catégorie: <span class="text-info">{{$classe->categorie->nom}}</span></p>
                        <p class="card-text">Prioritaire: <span class="text-info">{{$classe->prioritaire===1?'Oui':'Non'}}</span></p>
                        <p class="card-text">Effectif: <span class="text-info">{{$classe->users->count()}}</span></p>
                        <p class="card-text">Tag(s): <span class="text-info">
                        @foreach ($classe->tags as $tag )
                        {{$tag->nom}},
                            
                        @endforeach    
                        </span></p>
                        <p class="card-text">Date du cours: <span class="text-info">{{$classe->date}}</span></p>
                        <form action="{{route('classes.destroy', $classe->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('classes.edit',$classe->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger my-2"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <div class="d-flex justify-content-evenly">
                            {{-- {{dd(Auth::user()->id)}} --}}
                        <form action="{{route('inscription',["classeId"=>$classe->id,"userId"=> Auth::user()->id])}}" method="POST" class="d-flex justify-content-center">

                            @csrf

                                <button type="submit" class="btn btn-info my-2">Inscription</button>
                        </form>      
                        <form action="{{route('désinscription', ["classeId"=>$classe->id,"userId"=> Auth::user()->id])}}" method="POST" class="d-flex justify-content-center">

                            @csrf

                                <button type="submit" class="btn btn-dark my-2">Désinscription</button>
                        </form>      
                        </div>
                    </div>
                </div> 
{{-- 
            <script>
                if(classe->prioritaire){
                    document.getElementsByTagName('span')[0].classList.remove("text-info");
                    document.getElementsByTagName('span')[0].classList.add("text-light");
                }else{
                    document.getElementsByTagName('span')[0].classList.remove("text-light");
                    if(document.getElementsByTagName('span')[0].classList.contains('text-info')){

                        document.getElementsByTagName('span')[0].classList.add("text-info");          
                    }
                }
            </script>                     --}}
    
            @endforeach
          <div class="container d-flex justify-content-center">
          
              <a href="{{route('classes.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
          </div>
        </div>
    </div>

@endsection