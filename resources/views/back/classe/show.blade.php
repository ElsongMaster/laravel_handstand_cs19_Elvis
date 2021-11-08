@extends('back.template.main')



@section('backContent')
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="card m-3" style="width: 18rem;">
    <img src="{{asset('img/class/'.$classe->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Titre: <span class="text-info">{{$classe->titre}}</span></h5>
              <h5 class="card-title">SousTitre: <span class="text-info">{{$classe->soustitre}}</span></h5>
              <p class="card-text">Span: <span class="text-info">{{$classe->span}}</span></p>
              <p class="card-text">Texte: <span class="text-info">{{$classe->texte}}</span></p>
              <p class="card-text">Btn: <span class="text-info">{{$classe->texte}}</span></p>
            <form action="{{route('classes.destroy', $classe->id)}}" method="POST" class="d-flex justify-content-center">
                @method('DELETE')
                @csrf
                    <a href="{{route('classes.edit',$classe->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                    <button type="button" class="btn btn-danger my-2">DELETE</button>
              </form>
    
            </div>
      </div> 
</div>
@endsection