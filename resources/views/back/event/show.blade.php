@extends('back.template.main')



@section('backContent')
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Titre: <span class="  text-info">{{$event->nom}}</span></h5>
            <h5 class="card-title">Description: <span class="  text-info">{{$event->horaire}}</span></h5>
            <p class="card-text">date: <span class="  text-info">{{$event->date}}</span></p>
            <p class="card-text">Heure: <span class="  text-info">{{$event->heure}}</span></p>


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
</div>
@endsection