@extends('back.template.main')










@section('backContent')
    <div class="container">
    <div class="d-flex justify-content-end m-3">
        <a href="{{route('layoutTrainers')}}" class="btn btn-info text-light">Voir l'apercu</a>
    </div>
        <h2 class="text-center fs-2">Toute les données de coach</h2>



        <div class="d-flex flex-wrap ">
            @foreach ( $coaches as $coach )
                 <div class="card m-3" style="width: 18rem;">
                    <img src="{{asset('img/trainer/'.$coach->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nom: <span class="text-info">{{$coach->user->name}}</span></h5>
                            <h5 class="card-title">
                                <div class=" d-flex justify-content-between w-75 my-3" >
                                @foreach ($coach->linksocials as $link )
                                    <a class="btn btn-info text-light" href="{{$link->lien}}"><i class="{{$link->icon->nomClass}}"></i></a> 
                                @endforeach
                                </div> 
                            </h5>                          
                        <form action="{{route('coaches.destroy', $coach->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('coaches.edit',$coach->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger my-2"><i class="fas fa-trash-alt"></i></button>
                        </form>
            
                    </div>
                </div>                 
            @endforeach
            <div class="container d-flex justify-content-center">
            
                <a href="{{route('coaches.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
            </div>
          
                
    
        </div>
    </div>
@endsection