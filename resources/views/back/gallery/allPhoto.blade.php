@extends('back.template.main')










@section('backContent')

  <div class="d-flex justify-content-end m-3">
      <a href="{{route('layoutGalleries')}}" class="btn btn-info text-light">Voir l'apercu</a>
  </div>
<div class="d-flex flex-wrap justify-content-evenly m-5">
@foreach ($photos as $photo )
    
<div class="card my-3" style="width: 18rem;">
  <img src="{{asset("img/portfolio/".$photo->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$photo->nom}}</h5>


    <div class="d-flex justify-content-center">
            <a href="{{route('galleries.edit',["gallery"=>$photo->id])}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
            <form action="{{route('galleries.destroy',["gallery"=>$photo->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
            </form>
    </div>
  </div>
</div>
@endforeach
      <div class="container d-flex justify-content-center">
      
          <a href="{{route('galleries.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
</div>
@endsection