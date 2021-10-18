@extends('back.template.main')



@section('backContent')
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="card m-3" style="width: 18rem;">
    <img src="{{asset('img/slider/'.$slider->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Titre: <span class="text-info">{{$slider->titre}}</span></h5>
              <h5 class="card-title">SousTitre: <span class="text-info">{{$slider->soustitre}}</span></h5>
              <p class="card-text">Span: <span class="text-info">{{$slider->span}}</span></p>
              <p class="card-text">Texte: <span class="text-info">{{$slider->texte}}</span></p>
              <p class="card-text">Btn: <span class="text-info">{{$slider->texte}}</span></p>
            <form action="{{route('sliders.destroy', $slider->id)}}" method="POST" class="d-flex justify-content-center">
                @method('DELETE')
                @csrf
                    <a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                    <button type="button" class="btn btn-danger my-2">DELETE</button>
              </form>
    
            </div>
      </div> 
</div>
@endsection