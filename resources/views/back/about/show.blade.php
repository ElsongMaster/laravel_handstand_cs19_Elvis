@extends('back.template.main')



@section('backContent')
<div class="d-flex justify-content-end m-3">
    <a href="{{route('layoutAbouts')}}" class="btn btn-info text-light">Voir l'apercu</a>
</div>
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="card m-3" style="width: 18rem;">
    <img src="{{asset('img/about/'.$about->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">lien video: <span class="text-info">{{$about->video}}</span></h5>

              <p class="card-text">Texte 1: <span class="text-info">{{$about->p1}}</span></p>
              <p class="card-text">Texte 2: <span class="text-info">{{$about->p2}}</span></p>
              <p class="card-text">texte bouton: <span class="text-info">{{$about->btn}}</span></p>
            <form action="{{route('abouts.destroy', $about->id)}}" method="POST" class="d-flex justify-content-center">
                @method('DELETE')
                @csrf
                    <a href="{{route('abouts.edit',$about->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                    <button type="button" class="btn btn-danger my-2">DELETE</button>
              </form>

    
            </div>
      </div> 
</div>
@endsection