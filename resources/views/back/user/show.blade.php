@extends('back.template.main')



@section('backContent')
<h1 class="fs-5 mt-4 text-decoration-underline text-center">Détails Utilisateur</h1>
<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 55vh;">
    <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nom: <span class="  text-info">{{$user->name}}</span></h5>
            <h5 class="card-title">Email: <span class="  text-info">{{$user->email}}</span></h5>
            <p class="card-text">Rôle: <span class="  text-info">{{$user->role->nom}}</span></p>
            <p class="card-text">Package: <span class="  text-info">{{$user->package!=null?$user->package->nom:'Aucun'}}</span></p>


            <form action="{{route('users.destroy', $user->id)}}" method="POST" class="d-flex justify-content-center">
                @method('DELETE')
                @csrf
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger my-2"><i class="fas fa-trash-alt"></i></button>
            </form>
            <div class="d-flex justify-content-evenly">


            </div>
        </div>
    </div> 
</div>
@endsection