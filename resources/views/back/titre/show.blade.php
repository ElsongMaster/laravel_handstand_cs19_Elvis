@extends('back.template.main')




@section('backContent')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">ID:<span class="text-info">{{$titre->id}}</span></h5>
    <h6 class="card-subtitle mb-2 text-muted">Titre: <span class="text-info">{{$titre->titre}}</span></h6>
    <p class="card-text">Sous-titre: <span class="text-info">{{$titre->description}}</span></p>
    <form action="{{route('titres.destroy',$titre->id)}}" method="post" class="d-flex justify-content-center mt-3">
    <a href="{{route('titres.edit',$titre->id)}}" class="btn btn-warning mr-3">EDIT</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
    {{-- <div class="d-flex justify-content-center">
    <a href="{{route('abouts.index')}}" class="btn btn-info mt-2 px-3">back</a>

    </div> --}}

  </div>
</div>
</div>
    
@endsection