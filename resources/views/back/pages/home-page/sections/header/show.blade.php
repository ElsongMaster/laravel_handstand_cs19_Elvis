@extends('back.template.main')



@section('backContent')
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="card m-3" style="width: 18rem;">
    <img src="{{asset('img/logo/'.$header->logo)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">logo: <span class="text-info">{{$header->logo}}</span></h5>
              <h5 class="card-title">Nom lien 1: <span class="text-info">{{$header->li1}}</span></h5>
              <h5 class="card-title">Nom lien 2: <span class="text-info">{{$header->li2}}</span></h5>
              <p class="card-text">Nom lien 3: <span class="text-info">{{$header->li3}}</span></p>
              <p class="card-text">Nom lien 4: <span class="text-info">{{$header->li4}}</span></p>
              <p class="card-text">Nom lien 5: <span class="text-info">{{$header->li5}}</span></p>
            <form action="{{route('headers.destroy', $header->id)}}" method="POST" class="d-flex justify-content-center">
                @method('DELETE')
                @csrf
                    <a href="{{route('headers.edit',$header->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                    <button type="button" class="btn btn-danger my-2">DELETE</button>
              </form>
            {{-- <a href="{{route('headers.index')}}">
                    <button type="button" class="btn btn-warning">BACK</button>
              </a> --}}
    
            </div>
      </div> 
</div>
@endsection