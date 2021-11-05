@extends('back.template.main')










@section('backContent')
    <div class="container">

        <h2 class="text-center fs-2">Toute les données de events</h2>



        <div class="d-flex flex-wrap ">
            @foreach ($events as $event )
                <div class="card m-3 mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titre: <span class="  text-info">{{$event->titre}}</span></h5>
                        <h5 class="card-title">Description: <span class="  text-info">{{$event->description}}</span></h5>
                        <p class="card-text">date: <span class="  text-info">{{date("d F Y",strtotime($event->date))}}</span></p>
                        <p class="card-text">Heure: <span class="  text-info">{{$event->heure}}</span></p>
                        <p class="card-text">Prioritaire: <span class="  text-info">{{$event->selected?'Oui':'Non'}}</span></p>


                        <form action="{{route('events.destroy', $event->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('events.edit',$event->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger my-2"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <div class="d-flex justify-content-evenly">
    
    
                        </div>
                    </div>
                </div> 

    
            @endforeach
          <div class="container d-flex justify-content-center">
          
              <a href="{{route('events.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
          </div>
        </div>
    </div>

@endsection