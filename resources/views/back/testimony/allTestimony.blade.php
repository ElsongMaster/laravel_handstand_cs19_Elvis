@extends('back.template.main')










@section('backContent')
    <div class="container">
        <div class="d-flex justify-content-end m-3">
            <a href="{{route('layoutTestimonies')}}" class="btn btn-info text-light">Voir l'apercu</a>
        </div>
        <h2 class="text-center fs-2">Toute les données de testimony</h2>



        <div class="d-flex flex-wrap ">
            @foreach ( $testimonies as $testimony )
                 <div class="card m-3" style="width: 18rem;">
                    <img style=" background: #5fc7ae;" src="{{asset('img/icon/'.$testimony->signature)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nom: <span class="text-info">{{$testimony->nom}}</span></h5>
                        <p>
                            {{$testimony->texte}}
                        </p>                        
                        <form action="{{route('testimonies.destroy', $testimony->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('testimonies.edit',$testimony->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                                <button type="submit" class="btn btn-danger my-2">DELETE</button>
                        </form>
            
                    </div>
                </div>                 
            @endforeach
            <div class="container d-flex justify-content-center">
            
                <a href="{{route('testimonies.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
            </div>
          
                
    
        </div>
    </div>
@endsection