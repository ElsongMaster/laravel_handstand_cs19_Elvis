@extends('back.template.main')










@section('backContent')
    <div class="container">
    <div class="d-flex justify-content-end m-3">
        <a href="{{route('layoutPackage')}}" class="btn btn-info text-light">Voir l'apercu</a>
    </div>
        <h2 class="text-center fs-2">Toute les données de package</h2>



        <div class="d-flex flex-wrap ">
            @foreach ( $packages as $package )
                 <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nom: <span class="text-info">{{$package->nom}}</span></h5>
                        <h5 class="card-title">titre: <span class="text-info">{{$package->titre}}</span></h5>
                        <p class="card-text">prix: <span class="text-info">{{$package->prix}}</span></p>
                        <p class="card-text">frequence: <span class="text-info">{{$package->frequence}}</span></p>
                        <p class="card-text">li1: <span class="text-info">{{$package->li1}}</span></p>
                        <p class="card-text">li2: <span class="text-info">{{$package->li2}}</span></p>
                        <p class="card-text">li3: <span class="text-info">{{$package->li3}}</span></p>
                        <p class="card-text">li4: <span class="text-info">{{$package->li4}}</span></p>
                        <p class="card-text">btn: <span class="text-info">{{$package->btn}}</span></p>
                        
                        <form action="{{route('packages.destroy', $package->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('packages.edit',$package->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger my-2"><i class="fas fa-trash-alt"></i></button>
                        </form>
            
                    </div>
                </div>                 
            @endforeach
            <div class="container d-flex justify-content-center">
            
                <a href="{{route('packages.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
            </div>
          
                
    
        </div>
    </div>
@endsection