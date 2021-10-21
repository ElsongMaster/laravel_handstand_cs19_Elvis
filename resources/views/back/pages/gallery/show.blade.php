@extends('back.template.main')



@section('backContent')
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="card m-3" style="width: 18rem;">
    <img src="{{asset('img/gallery/'.$gallerie->image)}}" class="card-img-top" alt="...">
            <div class="card-body">

            <form action="{{route('galleries.destroy', $gallerie->id)}}" method="POST" class="d-flex justify-content-center">
                @method('DELETE')
                @csrf
                    <a href="{{route('galleries.edit',$gallerie->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                    <button type="button" class="btn btn-danger my-2">DELETE</button>
              </form>
    
            </div>
      </div> 
</div>
@endsection
