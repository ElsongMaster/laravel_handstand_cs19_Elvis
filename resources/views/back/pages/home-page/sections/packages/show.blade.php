@extends('back.template.main')



@section('backContent')
<div class="container-fluid d-flex justify-content-center align-items-center">
                 <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nom: <span class="text-info">{{$coach->user->name}}</span></h5>
                        <h5 class="card-title">titre: <span class="text-info">{{$coach->user->name}}</span></h5>
                        <p class="card-text">prix: <span class="text-info">{{$coach->user->name}}</span></p>
                        <p class="card-text">frequence: <span class="text-info">{{$coach->user->name}}</span></p>
                        <p class="card-text">li1: <span class="text-info">{{$coach->user->name}}</span></p>
                        <p class="card-text">li2: <span class="text-info">{{$coach->user->name}}</span></p>
                        <p class="card-text">li3: <span class="text-info">{{$coach->user->name}}</span></p>
                        <p class="card-text">li4: <span class="text-info">{{$coach->user->name}}</span></p>
                        <p class="card-text">btn: <span class="text-info">{{$coach->user->name}}</span></p>
                        
                        <form action="{{route('packages.destroy', $package->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('packages.edit',$package->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                                <button type="submit" class="btn btn-danger my-2">DELETE</button>
                        </form>
            
                    </div>
                  </div> 
</div>
@endsection