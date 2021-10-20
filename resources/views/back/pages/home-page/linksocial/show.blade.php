@extends('back.template.main')



@section('backContent')
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Icon: <span class="fs-4"><i class="{{$linksocial->icon->nomClass}}"></i></span></h5>
                <p class="text-card"> Lien:<span class="text-info">{{$linksocial->lien}}</span></p>
                {{-- <form action="{{route('linksocials.destroy', $linksocial->id)}}" method="POST" class="d-flex justify-content-center">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger my-2">DELETE</button>
                </form> --}}
                <div class="d-flex justify-content-center">
                  <a href="{{route('linksocials.edit',$linksocial->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
            
                </div>
            </div>
            
            
      </div> 
</div>
@endsection